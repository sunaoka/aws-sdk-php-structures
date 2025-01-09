<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListComponents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Self'|'Shared'|'Amazon'|'ThirdParty'|'AWSMarketplace' $owner
 * @property list<Shapes\Filter> $filters
 * @property bool $byName
 * @property int $maxResults
 * @property string $nextToken
 */
class ListComponentsRequest extends Request
{
    /**
     * @param array{
     *     owner?: 'Self'|'Shared'|'Amazon'|'ThirdParty'|'AWSMarketplace',
     *     filters?: list<Shapes\Filter>,
     *     byName?: bool,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
