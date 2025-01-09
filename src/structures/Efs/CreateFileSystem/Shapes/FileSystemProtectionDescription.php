<?php

namespace Sunaoka\Aws\Structures\Efs\CreateFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|'REPLICATING' $ReplicationOverwriteProtection
 */
class FileSystemProtectionDescription extends Shape
{
    /**
     * @param array{ReplicationOverwriteProtection?: 'ENABLED'|'DISABLED'|'REPLICATING'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
