<?php

namespace Sunaoka\Aws\Structures\Ssm\ListOpsMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\OpsMetadataFilter>|null $Filters
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class ListOpsMetadataRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\OpsMetadataFilter>|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
