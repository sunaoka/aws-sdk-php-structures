<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\ListExports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 300>|null $MaxResults
 * @property string|null $NextToken
 */
class ListExportsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 300>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
