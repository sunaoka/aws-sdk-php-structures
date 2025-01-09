<?php

namespace Sunaoka\Aws\Structures\Chatbot\ListMicrosoftTeamsUserIdentities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChatConfigurationArn
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListMicrosoftTeamsUserIdentitiesRequest extends Request
{
    /**
     * @param array{
     *     ChatConfigurationArn?: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
