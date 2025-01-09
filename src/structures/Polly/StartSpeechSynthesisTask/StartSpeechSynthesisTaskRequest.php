<?php

namespace Sunaoka\Aws\Structures\Polly\StartSpeechSynthesisTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'standard'|'neural'|'long-form'|'generative' $Engine
 * @property 'arb'|'cmn-CN'|'cy-GB'|'da-DK'|'de-DE'|'en-AU'|'en-GB'|'en-GB-WLS'|'en-IN'|'en-US'|'es-ES'|'es-MX'|'es-US'|'fr-CA'|'fr-FR'|'is-IS'|'it-IT'|'ja-JP'|'hi-IN'|'ko-KR'|'nb-NO'|'nl-NL'|'pl-PL'|'pt-BR'|'pt-PT'|'ro-RO'|'ru-RU'|'sv-SE'|'tr-TR'|'en-NZ'|'en-ZA'|'ca-ES'|'de-AT'|'yue-CN'|'ar-AE'|'fi-FI'|'en-IE'|'nl-BE'|'fr-BE'|'cs-CZ'|'de-CH' $LanguageCode
 * @property list<string> $LexiconNames
 * @property 'json'|'mp3'|'ogg_vorbis'|'pcm' $OutputFormat
 * @property string $OutputS3BucketName
 * @property string $OutputS3KeyPrefix
 * @property string $SampleRate
 * @property string $SnsTopicArn
 * @property list<'sentence'|'ssml'|'viseme'|'word'> $SpeechMarkTypes
 * @property string $Text
 * @property 'ssml'|'text' $TextType
 * @property 'Aditi'|'Amy'|'Astrid'|'Bianca'|'Brian'|'Camila'|'Carla'|'Carmen'|'Celine'|'Chantal'|'Conchita'|'Cristiano'|'Dora'|'Emma'|'Enrique'|'Ewa'|'Filiz'|'Gabrielle'|'Geraint'|'Giorgio'|'Gwyneth'|'Hans'|'Ines'|'Ivy'|'Jacek'|'Jan'|'Joanna'|'Joey'|'Justin'|'Karl'|'Kendra'|'Kevin'|'Kimberly'|'Lea'|'Liv'|'Lotte'|'Lucia'|'Lupe'|'Mads'|'Maja'|'Marlene'|'Mathieu'|'Matthew'|'Maxim'|'Mia'|'Miguel'|'Mizuki'|'Naja'|'Nicole'|'Olivia'|'Penelope'|'Raveena'|'Ricardo'|'Ruben'|'Russell'|'Salli'|'Seoyeon'|'Takumi'|'Tatyana'|'Vicki'|'Vitoria'|'Zeina'|'Zhiyu'|'Aria'|'Ayanda'|'Arlet'|'Hannah'|'Arthur'|'Daniel'|'Liam'|'Pedro'|'Kajal'|'Hiujin'|'Laura'|'Elin'|'Ida'|'Suvi'|'Ola'|'Hala'|'Andres'|'Sergio'|'Remi'|'Adriano'|'Thiago'|'Ruth'|'Stephen'|'Kazuha'|'Tomoko'|'Niamh'|'Sofie'|'Lisa'|'Isabelle'|'Zayd'|'Danielle'|'Gregory'|'Burcu'|'Jitka'|'Sabrina' $VoiceId
 */
class StartSpeechSynthesisTaskRequest extends Request
{
    /**
     * @param array{
     *     Engine?: 'standard'|'neural'|'long-form'|'generative',
     *     LanguageCode?: 'arb'|'cmn-CN'|'cy-GB'|'da-DK'|'de-DE'|'en-AU'|'en-GB'|'en-GB-WLS'|'en-IN'|'en-US'|'es-ES'|'es-MX'|'es-US'|'fr-CA'|'fr-FR'|'is-IS'|'it-IT'|'ja-JP'|'hi-IN'|'ko-KR'|'nb-NO'|'nl-NL'|'pl-PL'|'pt-BR'|'pt-PT'|'ro-RO'|'ru-RU'|'sv-SE'|'tr-TR'|'en-NZ'|'en-ZA'|'ca-ES'|'de-AT'|'yue-CN'|'ar-AE'|'fi-FI'|'en-IE'|'nl-BE'|'fr-BE'|'cs-CZ'|'de-CH',
     *     LexiconNames?: list<string>,
     *     OutputFormat: 'json'|'mp3'|'ogg_vorbis'|'pcm',
     *     OutputS3BucketName: string,
     *     OutputS3KeyPrefix?: string,
     *     SampleRate?: string,
     *     SnsTopicArn?: string,
     *     SpeechMarkTypes?: list<'sentence'|'ssml'|'viseme'|'word'>,
     *     Text: string,
     *     TextType?: 'ssml'|'text',
     *     VoiceId: 'Aditi'|'Amy'|'Astrid'|'Bianca'|'Brian'|'Camila'|'Carla'|'Carmen'|'Celine'|'Chantal'|'Conchita'|'Cristiano'|'Dora'|'Emma'|'Enrique'|'Ewa'|'Filiz'|'Gabrielle'|'Geraint'|'Giorgio'|'Gwyneth'|'Hans'|'Ines'|'Ivy'|'Jacek'|'Jan'|'Joanna'|'Joey'|'Justin'|'Karl'|'Kendra'|'Kevin'|'Kimberly'|'Lea'|'Liv'|'Lotte'|'Lucia'|'Lupe'|'Mads'|'Maja'|'Marlene'|'Mathieu'|'Matthew'|'Maxim'|'Mia'|'Miguel'|'Mizuki'|'Naja'|'Nicole'|'Olivia'|'Penelope'|'Raveena'|'Ricardo'|'Ruben'|'Russell'|'Salli'|'Seoyeon'|'Takumi'|'Tatyana'|'Vicki'|'Vitoria'|'Zeina'|'Zhiyu'|'Aria'|'Ayanda'|'Arlet'|'Hannah'|'Arthur'|'Daniel'|'Liam'|'Pedro'|'Kajal'|'Hiujin'|'Laura'|'Elin'|'Ida'|'Suvi'|'Ola'|'Hala'|'Andres'|'Sergio'|'Remi'|'Adriano'|'Thiago'|'Ruth'|'Stephen'|'Kazuha'|'Tomoko'|'Niamh'|'Sofie'|'Lisa'|'Isabelle'|'Zayd'|'Danielle'|'Gregory'|'Burcu'|'Jitka'|'Sabrina'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
