<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VisualId
 * @property VisualTitleLabelOptions $Title
 * @property VisualSubtitleLabelOptions $Subtitle
 * @property CustomContentConfiguration $ChartConfiguration
 * @property list<VisualCustomAction> $Actions
 * @property string $DataSetIdentifier
 * @property string $VisualContentAltText
 */
class CustomContentVisual extends Shape
{
    /**
     * @param array{
     *     VisualId: string,
     *     Title?: VisualTitleLabelOptions,
     *     Subtitle?: VisualSubtitleLabelOptions,
     *     ChartConfiguration?: CustomContentConfiguration,
     *     Actions?: list<VisualCustomAction>,
     *     DataSetIdentifier: string,
     *     VisualContentAltText?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
