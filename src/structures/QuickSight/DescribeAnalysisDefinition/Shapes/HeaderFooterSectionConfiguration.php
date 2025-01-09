<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SectionId
 * @property SectionLayoutConfiguration $Layout
 * @property SectionStyle $Style
 */
class HeaderFooterSectionConfiguration extends Shape
{
    /**
     * @param array{
     *     SectionId: string,
     *     Layout: SectionLayoutConfiguration,
     *     Style?: SectionStyle
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
