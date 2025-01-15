<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListPublishedSchemaArns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SchemaArn
 * @property string|null $NextToken
 * @property int<1, max>|null $MaxResults
 */
class ListPublishedSchemaArnsRequest extends Request
{
    /**
     * @param array{
     *     SchemaArn?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
