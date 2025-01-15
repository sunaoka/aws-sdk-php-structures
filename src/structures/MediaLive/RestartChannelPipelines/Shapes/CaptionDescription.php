<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DOES_NOT_IMPLEMENT_ACCESSIBILITY_FEATURES'|'IMPLEMENTS_ACCESSIBILITY_FEATURES'|null $Accessibility
 * @property string $CaptionSelectorName
 * @property CaptionDestinationSettings|null $DestinationSettings
 * @property string|null $LanguageCode
 * @property string|null $LanguageDescription
 * @property string $Name
 * @property list<'ALTERNATE'|'CAPTION'|'COMMENTARY'|'DESCRIPTION'|'DUB'|'EASYREADER'|'EMERGENCY'|'FORCED-SUBTITLE'|'KARAOKE'|'MAIN'|'METADATA'|'SUBTITLE'|'SUPPLEMENTARY'>|null $CaptionDashRoles
 * @property 'DVBDASH_1_VISUALLY_IMPAIRED'|'DVBDASH_2_HARD_OF_HEARING'|'DVBDASH_3_SUPPLEMENTAL_COMMENTARY'|'DVBDASH_4_DIRECTORS_COMMENTARY'|'DVBDASH_5_EDUCATIONAL_NOTES'|'DVBDASH_6_MAIN_PROGRAM'|'DVBDASH_7_CLEAN_FEED'|null $DvbDashAccessibility
 */
class CaptionDescription extends Shape
{
    /**
     * @param array{
     *     Accessibility?: 'DOES_NOT_IMPLEMENT_ACCESSIBILITY_FEATURES'|'IMPLEMENTS_ACCESSIBILITY_FEATURES'|null,
     *     CaptionSelectorName: string,
     *     DestinationSettings?: CaptionDestinationSettings|null,
     *     LanguageCode?: string|null,
     *     LanguageDescription?: string|null,
     *     Name: string,
     *     CaptionDashRoles?: list<'ALTERNATE'|'CAPTION'|'COMMENTARY'|'DESCRIPTION'|'DUB'|'EASYREADER'|'EMERGENCY'|'FORCED-SUBTITLE'|'KARAOKE'|'MAIN'|'METADATA'|'SUBTITLE'|'SUPPLEMENTARY'>|null,
     *     DvbDashAccessibility?: 'DVBDASH_1_VISUALLY_IMPAIRED'|'DVBDASH_2_HARD_OF_HEARING'|'DVBDASH_3_SUPPLEMENTAL_COMMENTARY'|'DVBDASH_4_DIRECTORS_COMMENTARY'|'DVBDASH_5_EDUCATIONAL_NOTES'|'DVBDASH_6_MAIN_PROGRAM'|'DVBDASH_7_CLEAN_FEED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
