<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\ImportSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotName
 * @property Shapes\ImportSourceConfiguration $ImportSourceConfiguration
 * @property Shapes\SnapshotEncryptionConfiguration|null $DestinationEncryptionConfiguration
 * @property string|null $SnapshotDescription
 * @property 'CANONICAL'|null $SnapshotFormat
 * @property list<Shapes\Tag>|null $Tags
 */
class ImportSnapshotRequest extends Request
{
    /**
     * @param array{
     *     SnapshotName: string,
     *     ImportSourceConfiguration: Shapes\ImportSourceConfiguration,
     *     DestinationEncryptionConfiguration?: Shapes\SnapshotEncryptionConfiguration|null,
     *     SnapshotDescription?: string|null,
     *     SnapshotFormat?: 'CANONICAL'|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
