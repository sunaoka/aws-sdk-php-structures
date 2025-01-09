<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AudioChannelTaggingSettings $AudioChannelTaggingSettings
 * @property AudioNormalizationSettings $AudioNormalizationSettings
 * @property string $AudioSourceName
 * @property int<0, 255> $AudioType
 * @property 'FOLLOW_INPUT'|'USE_CONFIGURED' $AudioTypeControl
 * @property AudioCodecSettings $CodecSettings
 * @property string $CustomLanguageCode
 * @property 'ENG'|'SPA'|'FRA'|'DEU'|'GER'|'ZHO'|'ARA'|'HIN'|'JPN'|'RUS'|'POR'|'ITA'|'URD'|'VIE'|'KOR'|'PAN'|'ABK'|'AAR'|'AFR'|'AKA'|'SQI'|'AMH'|'ARG'|'HYE'|'ASM'|'AVA'|'AVE'|'AYM'|'AZE'|'BAM'|'BAK'|'EUS'|'BEL'|'BEN'|'BIH'|'BIS'|'BOS'|'BRE'|'BUL'|'MYA'|'CAT'|'KHM'|'CHA'|'CHE'|'NYA'|'CHU'|'CHV'|'COR'|'COS'|'CRE'|'HRV'|'CES'|'DAN'|'DIV'|'NLD'|'DZO'|'ENM'|'EPO'|'EST'|'EWE'|'FAO'|'FIJ'|'FIN'|'FRM'|'FUL'|'GLA'|'GLG'|'LUG'|'KAT'|'ELL'|'GRN'|'GUJ'|'HAT'|'HAU'|'HEB'|'HER'|'HMO'|'HUN'|'ISL'|'IDO'|'IBO'|'IND'|'INA'|'ILE'|'IKU'|'IPK'|'GLE'|'JAV'|'KAL'|'KAN'|'KAU'|'KAS'|'KAZ'|'KIK'|'KIN'|'KIR'|'KOM'|'KON'|'KUA'|'KUR'|'LAO'|'LAT'|'LAV'|'LIM'|'LIN'|'LIT'|'LUB'|'LTZ'|'MKD'|'MLG'|'MSA'|'MAL'|'MLT'|'GLV'|'MRI'|'MAR'|'MAH'|'MON'|'NAU'|'NAV'|'NDE'|'NBL'|'NDO'|'NEP'|'SME'|'NOR'|'NOB'|'NNO'|'OCI'|'OJI'|'ORI'|'ORM'|'OSS'|'PLI'|'FAS'|'POL'|'PUS'|'QUE'|'QAA'|'RON'|'ROH'|'RUN'|'SMO'|'SAG'|'SAN'|'SRD'|'SRB'|'SNA'|'III'|'SND'|'SIN'|'SLK'|'SLV'|'SOM'|'SOT'|'SUN'|'SWA'|'SSW'|'SWE'|'TGL'|'TAH'|'TGK'|'TAM'|'TAT'|'TEL'|'THA'|'BOD'|'TIR'|'TON'|'TSO'|'TSN'|'TUR'|'TUK'|'TWI'|'UIG'|'UKR'|'UZB'|'VEN'|'VOL'|'WLN'|'CYM'|'FRY'|'WOL'|'XHO'|'YID'|'YOR'|'ZHA'|'ZUL'|'ORJ'|'QPC'|'TNG'|'SRP' $LanguageCode
 * @property 'FOLLOW_INPUT'|'USE_CONFIGURED' $LanguageCodeControl
 * @property RemixSettings $RemixSettings
 * @property string $StreamName
 */
class AudioDescription extends Shape
{
    /**
     * @param array{
     *     AudioChannelTaggingSettings?: AudioChannelTaggingSettings,
     *     AudioNormalizationSettings?: AudioNormalizationSettings,
     *     AudioSourceName?: string,
     *     AudioType?: int<0, 255>,
     *     AudioTypeControl?: 'FOLLOW_INPUT'|'USE_CONFIGURED',
     *     CodecSettings?: AudioCodecSettings,
     *     CustomLanguageCode?: string,
     *     LanguageCode?: 'ENG'|'SPA'|'FRA'|'DEU'|'GER'|'ZHO'|'ARA'|'HIN'|'JPN'|'RUS'|'POR'|'ITA'|'URD'|'VIE'|'KOR'|'PAN'|'ABK'|'AAR'|'AFR'|'AKA'|'SQI'|'AMH'|'ARG'|'HYE'|'ASM'|'AVA'|'AVE'|'AYM'|'AZE'|'BAM'|'BAK'|'EUS'|'BEL'|'BEN'|'BIH'|'BIS'|'BOS'|'BRE'|'BUL'|'MYA'|'CAT'|'KHM'|'CHA'|'CHE'|'NYA'|'CHU'|'CHV'|'COR'|'COS'|'CRE'|'HRV'|'CES'|'DAN'|'DIV'|'NLD'|'DZO'|'ENM'|'EPO'|'EST'|'EWE'|'FAO'|'FIJ'|'FIN'|'FRM'|'FUL'|'GLA'|'GLG'|'LUG'|'KAT'|'ELL'|'GRN'|'GUJ'|'HAT'|'HAU'|'HEB'|'HER'|'HMO'|'HUN'|'ISL'|'IDO'|'IBO'|'IND'|'INA'|'ILE'|'IKU'|'IPK'|'GLE'|'JAV'|'KAL'|'KAN'|'KAU'|'KAS'|'KAZ'|'KIK'|'KIN'|'KIR'|'KOM'|'KON'|'KUA'|'KUR'|'LAO'|'LAT'|'LAV'|'LIM'|'LIN'|'LIT'|'LUB'|'LTZ'|'MKD'|'MLG'|'MSA'|'MAL'|'MLT'|'GLV'|'MRI'|'MAR'|'MAH'|'MON'|'NAU'|'NAV'|'NDE'|'NBL'|'NDO'|'NEP'|'SME'|'NOR'|'NOB'|'NNO'|'OCI'|'OJI'|'ORI'|'ORM'|'OSS'|'PLI'|'FAS'|'POL'|'PUS'|'QUE'|'QAA'|'RON'|'ROH'|'RUN'|'SMO'|'SAG'|'SAN'|'SRD'|'SRB'|'SNA'|'III'|'SND'|'SIN'|'SLK'|'SLV'|'SOM'|'SOT'|'SUN'|'SWA'|'SSW'|'SWE'|'TGL'|'TAH'|'TGK'|'TAM'|'TAT'|'TEL'|'THA'|'BOD'|'TIR'|'TON'|'TSO'|'TSN'|'TUR'|'TUK'|'TWI'|'UIG'|'UKR'|'UZB'|'VEN'|'VOL'|'WLN'|'CYM'|'FRY'|'WOL'|'XHO'|'YID'|'YOR'|'ZHA'|'ZUL'|'ORJ'|'QPC'|'TNG'|'SRP',
     *     LanguageCodeControl?: 'FOLLOW_INPUT'|'USE_CONFIGURED',
     *     RemixSettings?: RemixSettings,
     *     StreamName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
