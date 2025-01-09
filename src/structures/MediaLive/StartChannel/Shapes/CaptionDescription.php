<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DOES_NOT_IMPLEMENT_ACCESSIBILITY_FEATURES'|'IMPLEMENTS_ACCESSIBILITY_FEATURES' $Accessibility
 * @property string $CaptionSelectorName
 * @property CaptionDestinationSettings $DestinationSettings
 * @property string $LanguageCode
 * @property string $LanguageDescription
 * @property string $Name
 * @property list<'ALTERNATE'|'CAPTION'|'COMMENTARY'|'DESCRIPTION'|'DUB'|'EASYREADER'|'EMERGENCY'|'FORCED-SUBTITLE'|'KARAOKE'|'MAIN'|'METADATA'|'SUBTITLE'|'SUPPLEMENTARY'> $CaptionDashRoles
 * @property 'DVBDASH_1_VISUALLY_IMPAIRED'|'DVBDASH_2_HARD_OF_HEARING'|'DVBDASH_3_SUPPLEMENTAL_COMMENTARY'|'DVBDASH_4_DIRECTORS_COMMENTARY'|'DVBDASH_5_EDUCATIONAL_NOTES'|'DVBDASH_6_MAIN_PROGRAM'|'DVBDASH_7_CLEAN_FEED' $DvbDashAccessibility
 */
class CaptionDescription extends Shape
{
    /**
     * @param array{
     *     Accessibility?: 'DOES_NOT_IMPLEMENT_ACCESSIBILITY_FEATURES'|'IMPLEMENTS_ACCESSIBILITY_FEATURES',
     *     CaptionSelectorName: string,
     *     DestinationSettings?: CaptionDestinationSettings,
     *     LanguageCode?: string,
     *     LanguageDescription?: string,
     *     Name: string,
     *     CaptionDashRoles?: list<'ALTERNATE'|'CAPTION'|'COMMENTARY'|'DESCRIPTION'|'DUB'|'EASYREADER'|'EMERGENCY'|'FORCED-SUBTITLE'|'KARAOKE'|'MAIN'|'METADATA'|'SUBTITLE'|'SUPPLEMENTARY'>,
     *     DvbDashAccessibility?: 'DVBDASH_1_VISUALLY_IMPAIRED'|'DVBDASH_2_HARD_OF_HEARING'|'DVBDASH_3_SUPPLEMENTAL_COMMENTARY'|'DVBDASH_4_DIRECTORS_COMMENTARY'|'DVBDASH_5_EDUCATIONAL_NOTES'|'DVBDASH_6_MAIN_PROGRAM'|'DVBDASH_7_CLEAN_FEED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
