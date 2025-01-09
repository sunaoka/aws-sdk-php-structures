<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListEventBridgeRuleTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupIdentifier
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 * @property string $SignalMapIdentifier
 */
class ListEventBridgeRuleTemplatesRequest extends Request
{
    /**
     * @param array{
     *     GroupIdentifier?: string,
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string,
     *     SignalMapIdentifier?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
