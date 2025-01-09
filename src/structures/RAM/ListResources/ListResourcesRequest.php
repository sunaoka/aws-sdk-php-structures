<?php

namespace Sunaoka\Aws\Structures\RAM\ListResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SELF'|'OTHER-ACCOUNTS' $resourceOwner
 * @property string $principal
 * @property string $resourceType
 * @property list<string> $resourceArns
 * @property list<string> $resourceShareArns
 * @property string $nextToken
 * @property int $maxResults
 * @property 'ALL'|'REGIONAL'|'GLOBAL' $resourceRegionScope
 */
class ListResourcesRequest extends Request
{
    /**
     * @param array{
     *     resourceOwner: 'SELF'|'OTHER-ACCOUNTS',
     *     principal?: string,
     *     resourceType?: string,
     *     resourceArns?: list<string>,
     *     resourceShareArns?: list<string>,
     *     nextToken?: string,
     *     maxResults?: int,
     *     resourceRegionScope?: 'ALL'|'REGIONAL'|'GLOBAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
