<?php

namespace Sunaoka\Aws\Structures\Sns\ListOriginationNumbers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 30>|null $MaxResults
 */
class ListOriginationNumbersRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 30>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
