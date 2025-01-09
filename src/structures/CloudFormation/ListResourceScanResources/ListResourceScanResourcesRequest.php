<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListResourceScanResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceScanId
 * @property string $ResourceIdentifier
 * @property string $ResourceTypePrefix
 * @property string $TagKey
 * @property string $TagValue
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListResourceScanResourcesRequest extends Request
{
    /**
     * @param array{
     *     ResourceScanId: string,
     *     ResourceIdentifier?: string,
     *     ResourceTypePrefix?: string,
     *     TagKey?: string,
     *     TagValue?: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
