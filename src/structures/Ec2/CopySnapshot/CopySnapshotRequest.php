<?php

namespace Sunaoka\Aws\Structures\Ec2\CopySnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property string|null $DestinationOutpostArn
 * @property string|null $DestinationRegion
 * @property bool|null $Encrypted
 * @property string|null $KmsKeyId
 * @property string|null $PresignedUrl
 * @property string $SourceRegion
 * @property string $SourceSnapshotId
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property int<1, 2880>|null $CompletionDurationMinutes
 * @property string|null $DestinationAvailabilityZone
 * @property bool|null $DryRun
 */
class CopySnapshotRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     DestinationOutpostArn?: string|null,
     *     DestinationRegion?: string|null,
     *     Encrypted?: bool|null,
     *     KmsKeyId?: string|null,
     *     PresignedUrl?: string|null,
     *     SourceRegion: string,
     *     SourceSnapshotId: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     CompletionDurationMinutes?: int<1, 2880>|null,
     *     DestinationAvailabilityZone?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
