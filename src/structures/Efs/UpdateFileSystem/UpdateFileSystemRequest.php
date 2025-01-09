<?php

namespace Sunaoka\Aws\Structures\Efs\UpdateFileSystem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileSystemId
 * @property 'bursting'|'provisioned'|'elastic' $ThroughputMode
 * @property double $ProvisionedThroughputInMibps
 */
class UpdateFileSystemRequest extends Request
{
    /**
     * @param array{
     *     FileSystemId: string,
     *     ThroughputMode?: 'bursting'|'provisioned'|'elastic',
     *     ProvisionedThroughputInMibps?: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
