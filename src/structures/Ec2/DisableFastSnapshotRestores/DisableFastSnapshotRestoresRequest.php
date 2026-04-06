<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableFastSnapshotRestores;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AvailabilityZones
 * @property list<string> $SourceSnapshotIds
 * @property bool|null $DryRun
 */
class DisableFastSnapshotRestoresRequest extends Request
{
    /**
     * @param array{
     *     AvailabilityZones: list<string>,
     *     SourceSnapshotIds: list<string>,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
