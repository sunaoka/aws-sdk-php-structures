<?php

namespace Sunaoka\Aws\Structures\kendra\ListFaqs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListFaqsRequest extends Request
{
    /**
     * @param array{
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
