<?php

namespace Sunaoka\Aws\Structures\Efs\UpdateFileSystem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileSystemId
 * @property 'bursting'|'provisioned'|'elastic'|null $ThroughputMode
 * @property double|null $ProvisionedThroughputInMibps
 */
class UpdateFileSystemRequest extends Request
{
    /**
     * @param array{
     *     FileSystemId: string,
     *     ThroughputMode?: 'bursting'|'provisioned'|'elastic'|null,
     *     ProvisionedThroughputInMibps?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
