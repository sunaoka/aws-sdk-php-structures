<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SheetImageId
 * @property SheetImageSource $Source
 * @property SheetImageScalingConfiguration|null $Scaling
 * @property SheetImageTooltipConfiguration|null $Tooltip
 * @property string|null $ImageContentAltText
 * @property ImageInteractionOptions|null $Interactions
 * @property list<ImageCustomAction>|null $Actions
 */
class SheetImage extends Shape
{
    /**
     * @param array{
     *     SheetImageId: string,
     *     Source: SheetImageSource,
     *     Scaling?: SheetImageScalingConfiguration|null,
     *     Tooltip?: SheetImageTooltipConfiguration|null,
     *     ImageContentAltText?: string|null,
     *     Interactions?: ImageInteractionOptions|null,
     *     Actions?: list<ImageCustomAction>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
