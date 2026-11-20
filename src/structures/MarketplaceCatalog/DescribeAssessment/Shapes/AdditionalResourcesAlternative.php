<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AdditionalResource> $Value
 * @property string $Rationale
 */
class AdditionalResourcesAlternative extends Shape
{
    /**
     * @param array{
     *     Value: list<AdditionalResource>,
     *     Rationale: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
