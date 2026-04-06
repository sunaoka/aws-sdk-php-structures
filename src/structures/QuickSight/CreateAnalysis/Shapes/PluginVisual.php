<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VisualId
 * @property string $PluginArn
 * @property VisualTitleLabelOptions|null $Title
 * @property VisualSubtitleLabelOptions|null $Subtitle
 * @property PluginVisualConfiguration|null $ChartConfiguration
 * @property list<VisualCustomAction>|null $Actions
 * @property string|null $VisualContentAltText
 */
class PluginVisual extends Shape
{
    /**
     * @param array{
     *     VisualId: string,
     *     PluginArn: string,
     *     Title?: VisualTitleLabelOptions|null,
     *     Subtitle?: VisualSubtitleLabelOptions|null,
     *     ChartConfiguration?: PluginVisualConfiguration|null,
     *     Actions?: list<VisualCustomAction>|null,
     *     VisualContentAltText?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
