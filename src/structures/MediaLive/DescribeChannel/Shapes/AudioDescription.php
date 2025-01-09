<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AudioNormalizationSettings $AudioNormalizationSettings
 * @property string $AudioSelectorName
 * @property 'CLEAN_EFFECTS'|'HEARING_IMPAIRED'|'UNDEFINED'|'VISUAL_IMPAIRED_COMMENTARY' $AudioType
 * @property 'FOLLOW_INPUT'|'USE_CONFIGURED' $AudioTypeControl
 * @property AudioWatermarkSettings $AudioWatermarkingSettings
 * @property AudioCodecSettings $CodecSettings
 * @property string $LanguageCode
 * @property 'FOLLOW_INPUT'|'USE_CONFIGURED' $LanguageCodeControl
 * @property string $Name
 * @property RemixSettings $RemixSettings
 * @property string $StreamName
 * @property list<'ALTERNATE'|'COMMENTARY'|'DESCRIPTION'|'DUB'|'EMERGENCY'|'ENHANCED-AUDIO-INTELLIGIBILITY'|'KARAOKE'|'MAIN'|'SUPPLEMENTARY'> $AudioDashRoles
 * @property 'DVBDASH_1_VISUALLY_IMPAIRED'|'DVBDASH_2_HARD_OF_HEARING'|'DVBDASH_3_SUPPLEMENTAL_COMMENTARY'|'DVBDASH_4_DIRECTORS_COMMENTARY'|'DVBDASH_5_EDUCATIONAL_NOTES'|'DVBDASH_6_MAIN_PROGRAM'|'DVBDASH_7_CLEAN_FEED' $DvbDashAccessibility
 */
class AudioDescription extends Shape
{
    /**
     * @param array{
     *     AudioNormalizationSettings?: AudioNormalizationSettings,
     *     AudioSelectorName: string,
     *     AudioType?: 'CLEAN_EFFECTS'|'HEARING_IMPAIRED'|'UNDEFINED'|'VISUAL_IMPAIRED_COMMENTARY',
     *     AudioTypeControl?: 'FOLLOW_INPUT'|'USE_CONFIGURED',
     *     AudioWatermarkingSettings?: AudioWatermarkSettings,
     *     CodecSettings?: AudioCodecSettings,
     *     LanguageCode?: string,
     *     LanguageCodeControl?: 'FOLLOW_INPUT'|'USE_CONFIGURED',
     *     Name: string,
     *     RemixSettings?: RemixSettings,
     *     StreamName?: string,
     *     AudioDashRoles?: list<'ALTERNATE'|'COMMENTARY'|'DESCRIPTION'|'DUB'|'EMERGENCY'|'ENHANCED-AUDIO-INTELLIGIBILITY'|'KARAOKE'|'MAIN'|'SUPPLEMENTARY'>,
     *     DvbDashAccessibility?: 'DVBDASH_1_VISUALLY_IMPAIRED'|'DVBDASH_2_HARD_OF_HEARING'|'DVBDASH_3_SUPPLEMENTAL_COMMENTARY'|'DVBDASH_4_DIRECTORS_COMMENTARY'|'DVBDASH_5_EDUCATIONAL_NOTES'|'DVBDASH_6_MAIN_PROGRAM'|'DVBDASH_7_CLEAN_FEED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
