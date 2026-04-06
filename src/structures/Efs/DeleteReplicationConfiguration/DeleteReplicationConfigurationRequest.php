<?php

namespace Sunaoka\Aws\Structures\Efs\DeleteReplicationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceFileSystemId
 */
class DeleteReplicationConfigurationRequest extends Request
{
    /**
     * @param array{SourceFileSystemId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
