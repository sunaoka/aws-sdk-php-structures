<?php

namespace Sunaoka\Aws\Structures\DirectoryService\StartSchemaExtension;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property bool $CreateSnapshotBeforeSchemaExtension
 * @property string $LdifContent
 * @property string $Description
 */
class StartSchemaExtensionRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     CreateSnapshotBeforeSchemaExtension: bool,
     *     LdifContent: string,
     *     Description: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
