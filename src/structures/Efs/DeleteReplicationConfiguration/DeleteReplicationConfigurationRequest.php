<?php

namespace Sunaoka\Aws\Structures\Efs\DeleteReplicationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceFileSystemId
 * @property 'ALL_CONFIGURATIONS'|'LOCAL_CONFIGURATION_ONLY'|null $DeletionMode
 */
class DeleteReplicationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     SourceFileSystemId: string,
     *     DeletionMode?: 'ALL_CONFIGURATIONS'|'LOCAL_CONFIGURATION_ONLY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
