<?php

namespace Sunaoka\Aws\Structures\Chatbot\ListMicrosoftTeamsChannelConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $TeamId
 */
class ListMicrosoftTeamsChannelConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     TeamId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
