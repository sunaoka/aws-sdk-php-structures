<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'AUTO'|'TRACK'|'FRAME'|'FORCE'|null $AudioDurationCorrection
 * @property string|null $CustomLanguageCode
 * @property 'DEFAULT'|'NOT_DEFAULT'|null $DefaultSelection
 * @property string|null $ExternalAudioFileInput
 * @property HlsRenditionGroupSettings|null $HlsRenditionGroupSettings
 * @property 'ENG'|'SPA'|'FRA'|'DEU'|'GER'|'ZHO'|'ARA'|'HIN'|'JPN'|'RUS'|'POR'|'ITA'|'URD'|'VIE'|'KOR'|'PAN'|'ABK'|'AAR'|'AFR'|'AKA'|'SQI'|'AMH'|'ARG'|'HYE'|'ASM'|'AVA'|'AVE'|'AYM'|'AZE'|'BAM'|'BAK'|'EUS'|'BEL'|'BEN'|'BIH'|'BIS'|'BOS'|'BRE'|'BUL'|'MYA'|'CAT'|'KHM'|'CHA'|'CHE'|'NYA'|'CHU'|'CHV'|'COR'|'COS'|'CRE'|'HRV'|'CES'|'DAN'|'DIV'|'NLD'|'DZO'|'ENM'|'EPO'|'EST'|'EWE'|'FAO'|'FIJ'|'FIN'|'FRM'|'FUL'|'GLA'|'GLG'|'LUG'|'KAT'|'ELL'|'GRN'|'GUJ'|'HAT'|'HAU'|'HEB'|'HER'|'HMO'|'HUN'|'ISL'|'IDO'|'IBO'|'IND'|'INA'|'ILE'|'IKU'|'IPK'|'GLE'|'JAV'|'KAL'|'KAN'|'KAU'|'KAS'|'KAZ'|'KIK'|'KIN'|'KIR'|'KOM'|'KON'|'KUA'|'KUR'|'LAO'|'LAT'|'LAV'|'LIM'|'LIN'|'LIT'|'LUB'|'LTZ'|'MKD'|'MLG'|'MSA'|'MAL'|'MLT'|'GLV'|'MRI'|'MAR'|'MAH'|'MON'|'NAU'|'NAV'|'NDE'|'NBL'|'NDO'|'NEP'|'SME'|'NOR'|'NOB'|'NNO'|'OCI'|'OJI'|'ORI'|'ORM'|'OSS'|'PLI'|'FAS'|'POL'|'PUS'|'QUE'|'QAA'|'RON'|'ROH'|'RUN'|'SMO'|'SAG'|'SAN'|'SRD'|'SRB'|'SNA'|'III'|'SND'|'SIN'|'SLK'|'SLV'|'SOM'|'SOT'|'SUN'|'SWA'|'SSW'|'SWE'|'TGL'|'TAH'|'TGK'|'TAM'|'TAT'|'TEL'|'THA'|'BOD'|'TIR'|'TON'|'TSO'|'TSN'|'TUR'|'TUK'|'TWI'|'UIG'|'UKR'|'UZB'|'VEN'|'VOL'|'WLN'|'CYM'|'FRY'|'WOL'|'XHO'|'YID'|'YOR'|'ZHA'|'ZUL'|'ORJ'|'QPC'|'TNG'|'SRP'|null $LanguageCode
 * @property int<-2147483648, 2147483647>|null $Offset
 * @property list<int<1, 2147483647>>|null $Pids
 * @property int<0, 8>|null $ProgramSelection
 * @property RemixSettings|null $RemixSettings
 * @property 'PID'|'TRACK'|'LANGUAGE_CODE'|'HLS_RENDITION_GROUP'|'ALL_PCM'|'STREAM'|null $SelectorType
 * @property list<int<1, 2147483647>>|null $Streams
 * @property list<int<1, 2147483647>>|null $Tracks
 */
class AudioSelector extends Shape
{
    /**
     * @param array{
     *     AudioDurationCorrection?: 'DISABLED'|'AUTO'|'TRACK'|'FRAME'|'FORCE'|null,
     *     CustomLanguageCode?: string|null,
     *     DefaultSelection?: 'DEFAULT'|'NOT_DEFAULT'|null,
     *     ExternalAudioFileInput?: string|null,
     *     HlsRenditionGroupSettings?: HlsRenditionGroupSettings|null,
     *     LanguageCode?: 'ENG'|'SPA'|'FRA'|'DEU'|'GER'|'ZHO'|'ARA'|'HIN'|'JPN'|'RUS'|'POR'|'ITA'|'URD'|'VIE'|'KOR'|'PAN'|'ABK'|'AAR'|'AFR'|'AKA'|'SQI'|'AMH'|'ARG'|'HYE'|'ASM'|'AVA'|'AVE'|'AYM'|'AZE'|'BAM'|'BAK'|'EUS'|'BEL'|'BEN'|'BIH'|'BIS'|'BOS'|'BRE'|'BUL'|'MYA'|'CAT'|'KHM'|'CHA'|'CHE'|'NYA'|'CHU'|'CHV'|'COR'|'COS'|'CRE'|'HRV'|'CES'|'DAN'|'DIV'|'NLD'|'DZO'|'ENM'|'EPO'|'EST'|'EWE'|'FAO'|'FIJ'|'FIN'|'FRM'|'FUL'|'GLA'|'GLG'|'LUG'|'KAT'|'ELL'|'GRN'|'GUJ'|'HAT'|'HAU'|'HEB'|'HER'|'HMO'|'HUN'|'ISL'|'IDO'|'IBO'|'IND'|'INA'|'ILE'|'IKU'|'IPK'|'GLE'|'JAV'|'KAL'|'KAN'|'KAU'|'KAS'|'KAZ'|'KIK'|'KIN'|'KIR'|'KOM'|'KON'|'KUA'|'KUR'|'LAO'|'LAT'|'LAV'|'LIM'|'LIN'|'LIT'|'LUB'|'LTZ'|'MKD'|'MLG'|'MSA'|'MAL'|'MLT'|'GLV'|'MRI'|'MAR'|'MAH'|'MON'|'NAU'|'NAV'|'NDE'|'NBL'|'NDO'|'NEP'|'SME'|'NOR'|'NOB'|'NNO'|'OCI'|'OJI'|'ORI'|'ORM'|'OSS'|'PLI'|'FAS'|'POL'|'PUS'|'QUE'|'QAA'|'RON'|'ROH'|'RUN'|'SMO'|'SAG'|'SAN'|'SRD'|'SRB'|'SNA'|'III'|'SND'|'SIN'|'SLK'|'SLV'|'SOM'|'SOT'|'SUN'|'SWA'|'SSW'|'SWE'|'TGL'|'TAH'|'TGK'|'TAM'|'TAT'|'TEL'|'THA'|'BOD'|'TIR'|'TON'|'TSO'|'TSN'|'TUR'|'TUK'|'TWI'|'UIG'|'UKR'|'UZB'|'VEN'|'VOL'|'WLN'|'CYM'|'FRY'|'WOL'|'XHO'|'YID'|'YOR'|'ZHA'|'ZUL'|'ORJ'|'QPC'|'TNG'|'SRP'|null,
     *     Offset?: int<-2147483648, 2147483647>|null,
     *     Pids?: list<int<1, 2147483647>>|null,
     *     ProgramSelection?: int<0, 8>|null,
     *     RemixSettings?: RemixSettings|null,
     *     SelectorType?: 'PID'|'TRACK'|'LANGUAGE_CODE'|'HLS_RENDITION_GROUP'|'ALL_PCM'|'STREAM'|null,
     *     Streams?: list<int<1, 2147483647>>|null,
     *     Tracks?: list<int<1, 2147483647>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
