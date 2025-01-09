<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<HeaderFooterSectionConfiguration> $HeaderSections
 * @property list<BodySectionConfiguration> $BodySections
 * @property list<HeaderFooterSectionConfiguration> $FooterSections
 * @property SectionBasedLayoutCanvasSizeOptions $CanvasSizeOptions
 */
class SectionBasedLayoutConfiguration extends Shape
{
    /**
     * @param array{
     *     HeaderSections: list<HeaderFooterSectionConfiguration>,
     *     BodySections: list<BodySectionConfiguration>,
     *     FooterSections: list<HeaderFooterSectionConfiguration>,
     *     CanvasSizeOptions: SectionBasedLayoutCanvasSizeOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
