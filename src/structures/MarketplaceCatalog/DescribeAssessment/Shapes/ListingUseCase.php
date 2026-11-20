<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property int<1, 5> $Rank
 * @property string $Name
 * @property string $Group
 * @property string $Subgroup
 * @property string|null $UseCaseDetails
 * @property string $Rationale
 */
class ListingUseCase extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Rank: int<1, 5>,
     *     Name: string,
     *     Group: string,
     *     Subgroup: string,
     *     UseCaseDetails?: string|null,
     *     Rationale: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
