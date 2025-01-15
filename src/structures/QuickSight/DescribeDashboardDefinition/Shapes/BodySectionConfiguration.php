<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SectionId
 * @property BodySectionContent $Content
 * @property SectionStyle|null $Style
 * @property SectionPageBreakConfiguration|null $PageBreakConfiguration
 * @property BodySectionRepeatConfiguration|null $RepeatConfiguration
 */
class BodySectionConfiguration extends Shape
{
    /**
     * @param array{
     *     SectionId: string,
     *     Content: BodySectionContent,
     *     Style?: SectionStyle|null,
     *     PageBreakConfiguration?: SectionPageBreakConfiguration|null,
     *     RepeatConfiguration?: BodySectionRepeatConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
