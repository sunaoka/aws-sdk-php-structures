<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListExtensions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $Name
 */
class ListExtensionsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
