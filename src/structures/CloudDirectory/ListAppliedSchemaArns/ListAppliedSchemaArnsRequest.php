<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListAppliedSchemaArns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property string $SchemaArn
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListAppliedSchemaArnsRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     SchemaArn?: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
