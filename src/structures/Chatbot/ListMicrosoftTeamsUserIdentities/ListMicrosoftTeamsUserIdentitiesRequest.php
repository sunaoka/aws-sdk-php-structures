<?php

namespace Sunaoka\Aws\Structures\Chatbot\ListMicrosoftTeamsUserIdentities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ChatConfigurationArn
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListMicrosoftTeamsUserIdentitiesRequest extends Request
{
    /**
     * @param array{
     *     ChatConfigurationArn?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
