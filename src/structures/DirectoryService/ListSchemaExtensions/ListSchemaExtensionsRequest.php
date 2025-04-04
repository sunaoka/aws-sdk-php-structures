<?php

namespace Sunaoka\Aws\Structures\DirectoryService\ListSchemaExtensions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property string|null $NextToken
 * @property int<0, max>|null $Limit
 */
class ListSchemaExtensionsRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     NextToken?: string|null,
     *     Limit?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
