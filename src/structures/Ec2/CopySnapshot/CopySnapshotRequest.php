<?php

namespace Sunaoka\Aws\Structures\Ec2\CopySnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property string $DestinationOutpostArn
 * @property string $DestinationRegion
 * @property bool $Encrypted
 * @property string $KmsKeyId
 * @property string $PresignedUrl
 * @property string $SourceRegion
 * @property string $SourceSnapshotId
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property int<1, 2880> $CompletionDurationMinutes
 * @property bool $DryRun
 */
class CopySnapshotRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     DestinationOutpostArn?: string,
     *     DestinationRegion?: string,
     *     Encrypted?: bool,
     *     KmsKeyId?: string,
     *     PresignedUrl?: string,
     *     SourceRegion: string,
     *     SourceSnapshotId: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     CompletionDurationMinutes?: int<1, 2880>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
