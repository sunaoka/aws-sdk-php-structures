<?php

namespace Sunaoka\Aws\Structures\kendra\ListEntityPersonas;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $IndexId
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListEntityPersonasRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     IndexId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
