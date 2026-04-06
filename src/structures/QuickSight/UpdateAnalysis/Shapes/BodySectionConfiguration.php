<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SectionId
 * @property BodySectionContent $Content
 * @property SectionStyle|null $Style
 * @property SectionPageBreakConfiguration|null $PageBreakConfiguration
 */
class BodySectionConfiguration extends Shape
{
    /**
     * @param array{
     *     SectionId: string,
     *     Content: BodySectionContent,
     *     Style?: SectionStyle|null,
     *     PageBreakConfiguration?: SectionPageBreakConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
