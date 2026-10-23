<?php

namespace Sunaoka\Aws\Structures\Connect\ListReplicationFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ResourceType
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListReplicationFindingsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ResourceType: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
