<?php

namespace Sunaoka\Aws\Structures\Kafka\ListReplicators;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $ReplicatorNameFilter
 */
class ListReplicatorsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     ReplicatorNameFilter?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
