<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListComponents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Self'|'Shared'|'Amazon'|'ThirdParty'|'AWSMarketplace'|null $owner
 * @property list<Shapes\Filter>|null $filters
 * @property bool|null $byName
 * @property int<1, 25>|null $maxResults
 * @property string|null $nextToken
 */
class ListComponentsRequest extends Request
{
    /**
     * @param array{
     *     owner?: 'Self'|'Shared'|'Amazon'|'ThirdParty'|'AWSMarketplace'|null,
     *     filters?: list<Shapes\Filter>|null,
     *     byName?: bool|null,
     *     maxResults?: int<1, 25>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
