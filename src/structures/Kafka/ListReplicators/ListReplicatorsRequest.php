<?php

namespace Sunaoka\Aws\Structures\Kafka\ListReplicators;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 * @property string $ReplicatorNameFilter
 */
class ListReplicatorsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string,
     *     ReplicatorNameFilter?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
