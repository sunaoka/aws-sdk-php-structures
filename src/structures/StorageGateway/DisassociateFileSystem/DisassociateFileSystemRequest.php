<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DisassociateFileSystem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileSystemAssociationARN
 * @property bool|null $ForceDelete
 */
class DisassociateFileSystemRequest extends Request
{
    /**
     * @param array{
     *     FileSystemAssociationARN: string,
     *     ForceDelete?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
