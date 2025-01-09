<?php

namespace Sunaoka\Aws\Structures\Polly\DescribeVoices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Female'|'Male' $Gender
 * @property 'Aditi'|'Amy'|'Astrid'|'Bianca'|'Brian'|'Camila'|'Carla'|'Carmen'|'Celine'|'Chantal'|'Conchita'|'Cristiano'|'Dora'|'Emma'|'Enrique'|'Ewa'|'Filiz'|'Gabrielle'|'Geraint'|'Giorgio'|'Gwyneth'|'Hans'|'Ines'|'Ivy'|'Jacek'|'Jan'|'Joanna'|'Joey'|'Justin'|'Karl'|'Kendra'|'Kevin'|'Kimberly'|'Lea'|'Liv'|'Lotte'|'Lucia'|'Lupe'|'Mads'|'Maja'|'Marlene'|'Mathieu'|'Matthew'|'Maxim'|'Mia'|'Miguel'|'Mizuki'|'Naja'|'Nicole'|'Olivia'|'Penelope'|'Raveena'|'Ricardo'|'Ruben'|'Russell'|'Salli'|'Seoyeon'|'Takumi'|'Tatyana'|'Vicki'|'Vitoria'|'Zeina'|'Zhiyu'|'Aria'|'Ayanda'|'Arlet'|'Hannah'|'Arthur'|'Daniel'|'Liam'|'Pedro'|'Kajal'|'Hiujin'|'Laura'|'Elin'|'Ida'|'Suvi'|'Ola'|'Hala'|'Andres'|'Sergio'|'Remi'|'Adriano'|'Thiago'|'Ruth'|'Stephen'|'Kazuha'|'Tomoko'|'Niamh'|'Sofie'|'Lisa'|'Isabelle'|'Zayd'|'Danielle'|'Gregory'|'Burcu'|'Jitka'|'Sabrina' $Id
 * @property 'arb'|'cmn-CN'|'cy-GB'|'da-DK'|'de-DE'|'en-AU'|'en-GB'|'en-GB-WLS'|'en-IN'|'en-US'|'es-ES'|'es-MX'|'es-US'|'fr-CA'|'fr-FR'|'is-IS'|'it-IT'|'ja-JP'|'hi-IN'|'ko-KR'|'nb-NO'|'nl-NL'|'pl-PL'|'pt-BR'|'pt-PT'|'ro-RO'|'ru-RU'|'sv-SE'|'tr-TR'|'en-NZ'|'en-ZA'|'ca-ES'|'de-AT'|'yue-CN'|'ar-AE'|'fi-FI'|'en-IE'|'nl-BE'|'fr-BE'|'cs-CZ'|'de-CH' $LanguageCode
 * @property string $LanguageName
 * @property string $Name
 * @property list<'arb'|'cmn-CN'|'cy-GB'|'da-DK'|'de-DE'|'en-AU'|'en-GB'|'en-GB-WLS'|'en-IN'|'en-US'|'es-ES'|'es-MX'|'es-US'|'fr-CA'|'fr-FR'|'is-IS'|'it-IT'|'ja-JP'|'hi-IN'|'ko-KR'|'nb-NO'|'nl-NL'|'pl-PL'|'pt-BR'|'pt-PT'|'ro-RO'|'ru-RU'|'sv-SE'|'tr-TR'|'en-NZ'|'en-ZA'|'ca-ES'|'de-AT'|'yue-CN'|'ar-AE'|'fi-FI'|'en-IE'|'nl-BE'|'fr-BE'|'cs-CZ'|'de-CH'> $AdditionalLanguageCodes
 * @property list<'standard'|'neural'|'long-form'|'generative'> $SupportedEngines
 */
class Voice extends Shape
{
    /**
     * @param array{
     *     Gender?: 'Female'|'Male',
     *     Id?: 'Aditi'|'Amy'|'Astrid'|'Bianca'|'Brian'|'Camila'|'Carla'|'Carmen'|'Celine'|'Chantal'|'Conchita'|'Cristiano'|'Dora'|'Emma'|'Enrique'|'Ewa'|'Filiz'|'Gabrielle'|'Geraint'|'Giorgio'|'Gwyneth'|'Hans'|'Ines'|'Ivy'|'Jacek'|'Jan'|'Joanna'|'Joey'|'Justin'|'Karl'|'Kendra'|'Kevin'|'Kimberly'|'Lea'|'Liv'|'Lotte'|'Lucia'|'Lupe'|'Mads'|'Maja'|'Marlene'|'Mathieu'|'Matthew'|'Maxim'|'Mia'|'Miguel'|'Mizuki'|'Naja'|'Nicole'|'Olivia'|'Penelope'|'Raveena'|'Ricardo'|'Ruben'|'Russell'|'Salli'|'Seoyeon'|'Takumi'|'Tatyana'|'Vicki'|'Vitoria'|'Zeina'|'Zhiyu'|'Aria'|'Ayanda'|'Arlet'|'Hannah'|'Arthur'|'Daniel'|'Liam'|'Pedro'|'Kajal'|'Hiujin'|'Laura'|'Elin'|'Ida'|'Suvi'|'Ola'|'Hala'|'Andres'|'Sergio'|'Remi'|'Adriano'|'Thiago'|'Ruth'|'Stephen'|'Kazuha'|'Tomoko'|'Niamh'|'Sofie'|'Lisa'|'Isabelle'|'Zayd'|'Danielle'|'Gregory'|'Burcu'|'Jitka'|'Sabrina',
     *     LanguageCode?: 'arb'|'cmn-CN'|'cy-GB'|'da-DK'|'de-DE'|'en-AU'|'en-GB'|'en-GB-WLS'|'en-IN'|'en-US'|'es-ES'|'es-MX'|'es-US'|'fr-CA'|'fr-FR'|'is-IS'|'it-IT'|'ja-JP'|'hi-IN'|'ko-KR'|'nb-NO'|'nl-NL'|'pl-PL'|'pt-BR'|'pt-PT'|'ro-RO'|'ru-RU'|'sv-SE'|'tr-TR'|'en-NZ'|'en-ZA'|'ca-ES'|'de-AT'|'yue-CN'|'ar-AE'|'fi-FI'|'en-IE'|'nl-BE'|'fr-BE'|'cs-CZ'|'de-CH',
     *     LanguageName?: string,
     *     Name?: string,
     *     AdditionalLanguageCodes?: list<'arb'|'cmn-CN'|'cy-GB'|'da-DK'|'de-DE'|'en-AU'|'en-GB'|'en-GB-WLS'|'en-IN'|'en-US'|'es-ES'|'es-MX'|'es-US'|'fr-CA'|'fr-FR'|'is-IS'|'it-IT'|'ja-JP'|'hi-IN'|'ko-KR'|'nb-NO'|'nl-NL'|'pl-PL'|'pt-BR'|'pt-PT'|'ro-RO'|'ru-RU'|'sv-SE'|'tr-TR'|'en-NZ'|'en-ZA'|'ca-ES'|'de-AT'|'yue-CN'|'ar-AE'|'fi-FI'|'en-IE'|'nl-BE'|'fr-BE'|'cs-CZ'|'de-CH'>,
     *     SupportedEngines?: list<'standard'|'neural'|'long-form'|'generative'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
