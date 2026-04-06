<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListEventBridgeRuleTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $GroupIdentifier
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $SignalMapIdentifier
 */
class ListEventBridgeRuleTemplatesRequest extends Request
{
    /**
     * @param array{
     *     GroupIdentifier?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null,
     *     SignalMapIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
