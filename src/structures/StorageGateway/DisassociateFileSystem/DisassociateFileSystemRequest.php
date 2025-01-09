<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DisassociateFileSystem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileSystemAssociationARN
 * @property bool $ForceDelete
 */
class DisassociateFileSystemRequest extends Request
{
    /**
     * @param array{
     *     FileSystemAssociationARN: string,
     *     ForceDelete?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
