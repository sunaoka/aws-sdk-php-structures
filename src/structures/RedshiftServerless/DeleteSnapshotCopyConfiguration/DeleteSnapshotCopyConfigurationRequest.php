<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\DeleteSnapshotCopyConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $snapshotCopyConfigurationId
 */
class DeleteSnapshotCopyConfigurationRequest extends Request
{
    /**
     * @param array{snapshotCopyConfigurationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
