<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\CreateSnapshotCopyConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $destinationKmsKeyId
 * @property string $destinationRegion
 * @property string $namespaceName
 * @property int $snapshotRetentionPeriod
 */
class CreateSnapshotCopyConfigurationRequest extends Request
{
    /**
     * @param array{
     *     destinationKmsKeyId?: string,
     *     destinationRegion: string,
     *     namespaceName: string,
     *     snapshotRetentionPeriod?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
