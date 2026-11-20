<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ListingUseCase> $Value
 * @property string $Rationale
 */
class UseCasesAlternative extends Shape
{
    /**
     * @param array{
     *     Value: list<ListingUseCase>,
     *     Rationale: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
