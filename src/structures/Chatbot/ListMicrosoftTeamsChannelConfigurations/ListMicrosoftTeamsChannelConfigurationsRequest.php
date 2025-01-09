<?php

namespace Sunaoka\Aws\Structures\Chatbot\ListMicrosoftTeamsChannelConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $TeamId
 */
class ListMicrosoftTeamsChannelConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string,
     *     TeamId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
