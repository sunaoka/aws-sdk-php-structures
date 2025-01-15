<?php

namespace Sunaoka\Aws\Structures\RAM\ListResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SELF'|'OTHER-ACCOUNTS' $resourceOwner
 * @property string|null $principal
 * @property string|null $resourceType
 * @property list<string>|null $resourceArns
 * @property list<string>|null $resourceShareArns
 * @property string|null $nextToken
 * @property int<1, 500>|null $maxResults
 * @property 'ALL'|'REGIONAL'|'GLOBAL'|null $resourceRegionScope
 */
class ListResourcesRequest extends Request
{
    /**
     * @param array{
     *     resourceOwner: 'SELF'|'OTHER-ACCOUNTS',
     *     principal?: string|null,
     *     resourceType?: string|null,
     *     resourceArns?: list<string>|null,
     *     resourceShareArns?: list<string>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 500>|null,
     *     resourceRegionScope?: 'ALL'|'REGIONAL'|'GLOBAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
