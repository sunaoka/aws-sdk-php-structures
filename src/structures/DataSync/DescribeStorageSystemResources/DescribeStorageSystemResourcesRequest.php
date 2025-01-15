<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystemResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DiscoveryJobArn
 * @property 'SVM'|'VOLUME'|'CLUSTER' $ResourceType
 * @property list<string>|null $ResourceIds
 * @property array<'SVM', list<string>>|null $Filter
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeStorageSystemResourcesRequest extends Request
{
    /**
     * @param array{
     *     DiscoveryJobArn: string,
     *     ResourceType: 'SVM'|'VOLUME'|'CLUSTER',
     *     ResourceIds?: list<string>|null,
     *     Filter?: array<'SVM', list<string>>|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
