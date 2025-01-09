<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystemResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DiscoveryJobArn
 * @property 'SVM'|'VOLUME'|'CLUSTER' $ResourceType
 * @property list<string> $ResourceIds
 * @property array<'SVM', list<string>> $Filter
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeStorageSystemResourcesRequest extends Request
{
    /**
     * @param array{
     *     DiscoveryJobArn: string,
     *     ResourceType: 'SVM'|'VOLUME'|'CLUSTER',
     *     ResourceIds?: list<string>,
     *     Filter?: array<'SVM', list<string>>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
