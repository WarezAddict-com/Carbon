<?php

/*
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Localization;

class BmTest extends LocalizationTestCase
{
    const LOCALE = 'bm'; // Bambara

    const CASES = [
        // Carbon::parse('2018-01-04 00:00:00')->addDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Sini lɛrɛ 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Sibiri don lɛrɛ 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Kari don lɛrɛ 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Ntɛnɛn don lɛrɛ 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Tarata don lɛrɛ 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Araba don lɛrɛ 00:00',
        // Carbon::parse('2018-01-05 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-05 00:00:00'))
        'Alamisa don lɛrɛ 00:00',
        // Carbon::parse('2018-01-06 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-06 00:00:00'))
        'Juma don lɛrɛ 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Tarata don lɛrɛ 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(3)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Araba don lɛrɛ 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(4)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Alamisa don lɛrɛ 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(5)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Juma don lɛrɛ 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Sibiri don lɛrɛ 00:00',
        // Carbon::now()->subDays(2)->calendar()
        'Kari tɛmɛnen lɛrɛ 20:49',
        // Carbon::parse('2018-01-04 00:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Kunu lɛrɛ 22:00',
        // Carbon::parse('2018-01-04 12:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 12:00:00'))
        'Bi lɛrɛ 10:00',
        // Carbon::parse('2018-01-04 00:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Bi lɛrɛ 02:00',
        // Carbon::parse('2018-01-04 23:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 23:00:00'))
        'Sini lɛrɛ 01:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Tarata don lɛrɛ 00:00',
        // Carbon::parse('2018-01-08 00:00:00')->subDay()->calendar(Carbon::parse('2018-01-08 00:00:00'))
        'Kunu lɛrɛ 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Kunu lɛrɛ 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Tarata tɛmɛnen lɛrɛ 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Ntɛnɛn tɛmɛnen lɛrɛ 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Kari tɛmɛnen lɛrɛ 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Sibiri tɛmɛnen lɛrɛ 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Juma tɛmɛnen lɛrɛ 00:00',
        // Carbon::parse('2018-01-03 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-03 00:00:00'))
        'Alamisa tɛmɛnen lɛrɛ 00:00',
        // Carbon::parse('2018-01-02 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-02 00:00:00'))
        'Araba tɛmɛnen lɛrɛ 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Juma tɛmɛnen lɛrɛ 00:00',
        // Carbon::parse('2018-01-01 00:00:00')->isoFormat('Qo Mo Do Wo wo')
        '1 1 1 1 1',
        // Carbon::parse('2018-01-02 00:00:00')->isoFormat('Do wo')
        '2 1',
        // Carbon::parse('2018-01-03 00:00:00')->isoFormat('Do wo')
        '3 1',
        // Carbon::parse('2018-01-04 00:00:00')->isoFormat('Do wo')
        '4 1',
        // Carbon::parse('2018-01-05 00:00:00')->isoFormat('Do wo')
        '5 1',
        // Carbon::parse('2018-01-06 00:00:00')->isoFormat('Do wo')
        '6 1',
        // Carbon::parse('2018-01-07 00:00:00')->isoFormat('Do wo')
        '7 1',
        // Carbon::parse('2018-01-11 00:00:00')->isoFormat('Do wo')
        '11 2',
        // Carbon::parse('2018-02-09 00:00:00')->isoFormat('DDDo')
        '40',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('DDDo')
        '41',
        // Carbon::parse('2018-04-10 00:00:00')->isoFormat('DDDo')
        '100',
        // Carbon::parse('2018-02-10 00:00:00', 'Europe/Paris')->isoFormat('h:mm a z')
        '12:00 am cet',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('h:mm A, h:mm a')
        '12:00 AM, 12:00 am',
        // Carbon::parse('2018-02-10 01:30:00')->isoFormat('h:mm A, h:mm a')
        '1:30 AM, 1:30 am',
        // Carbon::parse('2018-02-10 02:00:00')->isoFormat('h:mm A, h:mm a')
        '2:00 AM, 2:00 am',
        // Carbon::parse('2018-02-10 06:00:00')->isoFormat('h:mm A, h:mm a')
        '6:00 AM, 6:00 am',
        // Carbon::parse('2018-02-10 10:00:00')->isoFormat('h:mm A, h:mm a')
        '10:00 AM, 10:00 am',
        // Carbon::parse('2018-02-10 12:00:00')->isoFormat('h:mm A, h:mm a')
        '12:00 PM, 12:00 pm',
        // Carbon::parse('2018-02-10 17:00:00')->isoFormat('h:mm A, h:mm a')
        '5:00 PM, 5:00 pm',
        // Carbon::parse('2018-02-10 21:30:00')->isoFormat('h:mm A, h:mm a')
        '9:30 PM, 9:30 pm',
        // Carbon::parse('2018-02-10 23:00:00')->isoFormat('h:mm A, h:mm a')
        '11:00 PM, 11:00 pm',
        // Carbon::parse('2018-01-01 00:00:00')->ordinal('hour')
        '0',
        // Carbon::now()->subSeconds(1)->diffForHumans()
        'a bɛ sanga dama dama bɔ',
        // Carbon::now()->subSeconds(1)->diffForHumans(null, false, true)
        'a bɛ sanga dama dama bɔ',
        // Carbon::now()->subSeconds(2)->diffForHumans()
        'a bɛ sekondi 2 bɔ',
        // Carbon::now()->subSeconds(2)->diffForHumans(null, false, true)
        'a bɛ sekondi 2 bɔ',
        // Carbon::now()->subMinutes(1)->diffForHumans()
        'a bɛ miniti kelen bɔ',
        // Carbon::now()->subMinutes(1)->diffForHumans(null, false, true)
        'a bɛ miniti kelen bɔ',
        // Carbon::now()->subMinutes(2)->diffForHumans()
        'a bɛ miniti 2 bɔ',
        // Carbon::now()->subMinutes(2)->diffForHumans(null, false, true)
        'a bɛ miniti 2 bɔ',
        // Carbon::now()->subHours(1)->diffForHumans()
        'a bɛ lɛrɛ kelen bɔ',
        // Carbon::now()->subHours(1)->diffForHumans(null, false, true)
        'a bɛ lɛrɛ kelen bɔ',
        // Carbon::now()->subHours(2)->diffForHumans()
        'a bɛ lɛrɛ 2 bɔ',
        // Carbon::now()->subHours(2)->diffForHumans(null, false, true)
        'a bɛ lɛrɛ 2 bɔ',
        // Carbon::now()->subDays(1)->diffForHumans()
        'a bɛ tile kelen bɔ',
        // Carbon::now()->subDays(1)->diffForHumans(null, false, true)
        'a bɛ tile kelen bɔ',
        // Carbon::now()->subDays(2)->diffForHumans()
        'a bɛ tile 2 bɔ',
        // Carbon::now()->subDays(2)->diffForHumans(null, false, true)
        'a bɛ tile 2 bɔ',
        // Carbon::now()->subWeeks(1)->diffForHumans()
        'a bɛ dɔgɔkun 1 bɔ',
        // Carbon::now()->subWeeks(1)->diffForHumans(null, false, true)
        'a bɛ dɔgɔkun 1 bɔ',
        // Carbon::now()->subWeeks(2)->diffForHumans()
        'a bɛ dɔgɔkun 2 bɔ',
        // Carbon::now()->subWeeks(2)->diffForHumans(null, false, true)
        'a bɛ dɔgɔkun 2 bɔ',
        // Carbon::now()->subMonths(1)->diffForHumans()
        'a bɛ kalo kelen bɔ',
        // Carbon::now()->subMonths(1)->diffForHumans(null, false, true)
        'a bɛ kalo kelen bɔ',
        // Carbon::now()->subMonths(2)->diffForHumans()
        'a bɛ kalo 2 bɔ',
        // Carbon::now()->subMonths(2)->diffForHumans(null, false, true)
        'a bɛ kalo 2 bɔ',
        // Carbon::now()->subYears(1)->diffForHumans()
        'a bɛ san kelen bɔ',
        // Carbon::now()->subYears(1)->diffForHumans(null, false, true)
        'a bɛ san kelen bɔ',
        // Carbon::now()->subYears(2)->diffForHumans()
        'a bɛ san 2 bɔ',
        // Carbon::now()->subYears(2)->diffForHumans(null, false, true)
        'a bɛ san 2 bɔ',
        // Carbon::now()->addSecond()->diffForHumans()
        'sanga dama dama kɔnɔ',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true)
        'sanga dama dama kɔnɔ',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now())
        'after',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), false, true)
        'after',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond())
        'before',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond(), false, true)
        'before',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true)
        'sanga dama dama',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true, true)
        'sanga dama dama',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true)
        'sekondi 2',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true, true)
        'sekondi 2',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true, 1)
        'sanga dama dama kɔnɔ',
        // Carbon::now()->addMinute()->addSecond()->diffForHumans(null, true, false, 2)
        'miniti kelen sanga dama dama',
        // Carbon::now()->addYears(2)->addMonths(3)->addDay()->addSecond()->diffForHumans(null, true, true, 4)
        'san 2 kalo 3 tile kelen sanga dama dama',
        // Carbon::now()->addYears(3)->diffForHumans(null, null, false, 4)
        'san 3 kɔnɔ',
        // Carbon::now()->subMonths(5)->diffForHumans(null, null, true, 4)
        'a bɛ kalo 5 bɔ',
        // Carbon::now()->subYears(2)->subMonths(3)->subDay()->subSecond()->diffForHumans(null, null, true, 4)
        'a bɛ san 2 kalo 3 tile kelen sanga dama dama bɔ',
        // Carbon::now()->addWeek()->addHours(10)->diffForHumans(null, true, false, 2)
        'dɔgɔkun 1 lɛrɛ 10',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        'dɔgɔkun 1 tile 6',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        'dɔgɔkun 1 tile 6',
        // Carbon::now()->addWeeks(2)->addHour()->diffForHumans(null, true, false, 2)
        'dɔgɔkun 2 lɛrɛ kelen',
        // CarbonInterval::days(2)->forHumans()
        'tile 2',
        // CarbonInterval::create('P1DT3H')->forHumans(true)
        'tile kelen lɛrɛ 3',
    ];
}
