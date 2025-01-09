<?php

namespace Sunaoka\Aws\Structures\DirectoryService\ListSchemaExtensions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property string $NextToken
 * @property int $Limit
 */
class ListSchemaExtensionsRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     NextToken?: string,
     *     Limit?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
