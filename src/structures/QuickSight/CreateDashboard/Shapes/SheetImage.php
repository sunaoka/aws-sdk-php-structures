<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SheetImageId
 * @property SheetImageSource $Source
 * @property SheetImageScalingConfiguration $Scaling
 * @property SheetImageTooltipConfiguration $Tooltip
 * @property string $ImageContentAltText
 * @property ImageInteractionOptions $Interactions
 * @property list<ImageCustomAction> $Actions
 */
class SheetImage extends Shape
{
    /**
     * @param array{
     *     SheetImageId: string,
     *     Source: SheetImageSource,
     *     Scaling?: SheetImageScalingConfiguration,
     *     Tooltip?: SheetImageTooltipConfiguration,
     *     ImageContentAltText?: string,
     *     Interactions?: ImageInteractionOptions,
     *     Actions?: list<ImageCustomAction>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
