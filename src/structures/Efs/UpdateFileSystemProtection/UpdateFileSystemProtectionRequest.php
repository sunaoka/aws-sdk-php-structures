<?php

namespace Sunaoka\Aws\Structures\Efs\UpdateFileSystemProtection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileSystemId
 * @property 'ENABLED'|'DISABLED'|'REPLICATING'|null $ReplicationOverwriteProtection
 */
class UpdateFileSystemProtectionRequest extends Request
{
    /**
     * @param array{
     *     FileSystemId: string,
     *     ReplicationOverwriteProtection?: 'ENABLED'|'DISABLED'|'REPLICATING'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
