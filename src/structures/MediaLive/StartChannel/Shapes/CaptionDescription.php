<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DOES_NOT_IMPLEMENT_ACCESSIBILITY_FEATURES'|'IMPLEMENTS_ACCESSIBILITY_FEATURES'|null $Accessibility
 * @property string $CaptionSelectorName
 * @property CaptionDestinationSettings|null $DestinationSettings
 * @property string|null $LanguageCode
 * @property string|null $LanguageDescription
 * @property string $Name
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
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
