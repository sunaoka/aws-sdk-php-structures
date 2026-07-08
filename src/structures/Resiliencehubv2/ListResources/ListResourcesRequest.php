<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceArn
 * @property string|null $serviceFunctionId
 * @property string|null $awsRegion
 * @property list<string>|null $resourceTypes
 * @property bool|null $billable
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListResourcesRequest extends Request
{
    /**
     * @param array{
     *     serviceArn: string,
     *     serviceFunctionId?: string|null,
     *     awsRegion?: string|null,
     *     resourceTypes?: list<string>|null,
     *     billable?: bool|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
