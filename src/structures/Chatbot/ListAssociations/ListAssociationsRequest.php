<?php

namespace Sunaoka\Aws\Structures\Chatbot\ListAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChatConfiguration
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListAssociationsRequest extends Request
{
    /**
     * @param array{
     *     ChatConfiguration: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
