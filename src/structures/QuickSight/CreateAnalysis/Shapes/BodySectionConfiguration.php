<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SectionId
 * @property BodySectionContent $Content
 * @property SectionStyle $Style
 * @property SectionPageBreakConfiguration $PageBreakConfiguration
 * @property BodySectionRepeatConfiguration $RepeatConfiguration
 */
class BodySectionConfiguration extends Shape
{
    /**
     * @param array{
     *     SectionId: string,
     *     Content: BodySectionContent,
     *     Style?: SectionStyle,
     *     PageBreakConfiguration?: SectionPageBreakConfiguration,
     *     RepeatConfiguration?: BodySectionRepeatConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
