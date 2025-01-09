<?php

namespace Sunaoka\Aws\Structures\SsmSap\ListComponents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListComponentsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId?: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
