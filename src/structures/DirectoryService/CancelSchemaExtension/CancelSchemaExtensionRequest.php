<?php

namespace Sunaoka\Aws\Structures\DirectoryService\CancelSchemaExtension;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property string $SchemaExtensionId
 */
class CancelSchemaExtensionRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     SchemaExtensionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
