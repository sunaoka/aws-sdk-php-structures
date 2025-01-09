<?php

namespace Sunaoka\Aws\Structures\Chatbot\ListAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChatConfiguration
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListAssociationsRequest extends Request
{
    /**
     * @param array{
     *     ChatConfiguration: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
