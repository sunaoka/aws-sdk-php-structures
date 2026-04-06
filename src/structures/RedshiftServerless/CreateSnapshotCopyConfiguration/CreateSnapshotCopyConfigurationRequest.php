<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\CreateSnapshotCopyConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $destinationKmsKeyId
 * @property string $destinationRegion
 * @property string $namespaceName
 * @property int|null $snapshotRetentionPeriod
 */
class CreateSnapshotCopyConfigurationRequest extends Request
{
    /**
     * @param array{
     *     destinationKmsKeyId?: string|null,
     *     destinationRegion: string,
     *     namespaceName: string,
     *     snapshotRetentionPeriod?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
