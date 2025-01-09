<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListDevelopmentSchemaArns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, max> $MaxResults
 */
class ListDevelopmentSchemaArnsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
