<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ListingCaseStudy> $Value
 * @property string $Rationale
 */
class CaseStudiesAlternative extends Shape
{
    /**
     * @param array{
     *     Value: list<ListingCaseStudy>,
     *     Rationale: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
