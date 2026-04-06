<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListResourceScanResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceScanId
 * @property string|null $ResourceIdentifier
 * @property string|null $ResourceTypePrefix
 * @property string|null $TagKey
 * @property string|null $TagValue
 * @property string|null $NextToken
 * @property int|null $MaxResults
 */
class ListResourceScanResourcesRequest extends Request
{
    /**
     * @param array{
     *     ResourceScanId: string,
     *     ResourceIdentifier?: string|null,
     *     ResourceTypePrefix?: string|null,
     *     TagKey?: string|null,
     *     TagValue?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
