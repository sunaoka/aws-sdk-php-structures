<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListManagedSchemaArns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SchemaArn
 * @property string $NextToken
 * @property int<1, max> $MaxResults
 */
class ListManagedSchemaArnsRequest extends Request
{
    /**
     * @param array{
     *     SchemaArn?: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
