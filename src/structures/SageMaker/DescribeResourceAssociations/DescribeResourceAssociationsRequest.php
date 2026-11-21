<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeResourceAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SMCapacityReservationArn
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeResourceAssociationsRequest extends Request
{
    /**
     * @param array{
     *     SMCapacityReservationArn: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
