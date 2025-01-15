<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListAppliedSchemaArns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property string|null $SchemaArn
 * @property string|null $NextToken
 * @property int<1, max>|null $MaxResults
 */
class ListAppliedSchemaArnsRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     SchemaArn?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
