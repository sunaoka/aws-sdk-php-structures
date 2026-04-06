<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListUltraServersByReservedCapacity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReservedCapacityArn
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListUltraServersByReservedCapacityRequest extends Request
{
    /**
     * @param array{
     *     ReservedCapacityArn: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
