<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AudioNormalizationSettings|null $AudioNormalizationSettings
 * @property string $AudioSelectorName
 * @property 'CLEAN_EFFECTS'|'HEARING_IMPAIRED'|'UNDEFINED'|'VISUAL_IMPAIRED_COMMENTARY'|null $AudioType
 * @property 'FOLLOW_INPUT'|'USE_CONFIGURED'|null $AudioTypeControl
 * @property AudioWatermarkSettings|null $AudioWatermarkingSettings
 * @property AudioCodecSettings|null $CodecSettings
 * @property string|null $LanguageCode
 * @property 'FOLLOW_INPUT'|'USE_CONFIGURED'|null $LanguageCodeControl
 * @property string $Name
 * @property RemixSettings|null $RemixSettings
 * @property string|null $StreamName
 * @property list<'ALTERNATE'|'COMMENTARY'|'DESCRIPTION'|'DUB'|'EMERGENCY'|'ENHANCED-AUDIO-INTELLIGIBILITY'|'KARAOKE'|'MAIN'|'SUPPLEMENTARY'>|null $AudioDashRoles
 * @property 'DVBDASH_1_VISUALLY_IMPAIRED'|'DVBDASH_2_HARD_OF_HEARING'|'DVBDASH_3_SUPPLEMENTAL_COMMENTARY'|'DVBDASH_4_DIRECTORS_COMMENTARY'|'DVBDASH_5_EDUCATIONAL_NOTES'|'DVBDASH_6_MAIN_PROGRAM'|'DVBDASH_7_CLEAN_FEED'|null $DvbDashAccessibility
 */
class AudioDescription extends Shape
{
    /**
     * @param array{
     *     AudioNormalizationSettings?: AudioNormalizationSettings|null,
     *     AudioSelectorName: string,
     *     AudioType?: 'CLEAN_EFFECTS'|'HEARING_IMPAIRED'|'UNDEFINED'|'VISUAL_IMPAIRED_COMMENTARY'|null,
     *     AudioTypeControl?: 'FOLLOW_INPUT'|'USE_CONFIGURED'|null,
     *     AudioWatermarkingSettings?: AudioWatermarkSettings|null,
     *     CodecSettings?: AudioCodecSettings|null,
     *     LanguageCode?: string|null,
     *     LanguageCodeControl?: 'FOLLOW_INPUT'|'USE_CONFIGURED'|null,
     *     Name: string,
     *     RemixSettings?: RemixSettings|null,
     *     StreamName?: string|null,
     *     AudioDashRoles?: list<'ALTERNATE'|'COMMENTARY'|'DESCRIPTION'|'DUB'|'EMERGENCY'|'ENHANCED-AUDIO-INTELLIGIBILITY'|'KARAOKE'|'MAIN'|'SUPPLEMENTARY'>|null,
     *     DvbDashAccessibility?: 'DVBDASH_1_VISUALLY_IMPAIRED'|'DVBDASH_2_HARD_OF_HEARING'|'DVBDASH_3_SUPPLEMENTAL_COMMENTARY'|'DVBDASH_4_DIRECTORS_COMMENTARY'|'DVBDASH_5_EDUCATIONAL_NOTES'|'DVBDASH_6_MAIN_PROGRAM'|'DVBDASH_7_CLEAN_FEED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
