<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Title
 * @property string $Rationale
 */
class ListingCaseStudy extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Title: string,
     *     Rationale: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
