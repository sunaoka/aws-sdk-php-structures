<?php

namespace Sunaoka\Aws\Structures\Ssm\ListOpsMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\OpsMetadataFilter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListOpsMetadataRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\OpsMetadataFilter>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
