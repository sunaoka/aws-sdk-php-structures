<?php

namespace Sunaoka\Aws\Structures\Sns\ListOriginationNumbers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 30> $MaxResults
 */
class ListOriginationNumbersRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 30>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
