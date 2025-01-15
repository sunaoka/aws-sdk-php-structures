<?php

namespace Sunaoka\Aws\Structures\SsmSap\ListComponents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ApplicationId
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 */
class ListComponentsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
