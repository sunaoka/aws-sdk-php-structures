<?php

namespace Sunaoka\Aws\Structures\FSx\CreateBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $SizeInMegabytes
 * @property string|null $SnapmirrorLabel
 * @property \Aws\Api\DateTimeResult|null $ExpiryTime
 * @property \Aws\Api\DateTimeResult|null $SnaplockExpiryTime
 * @property string|null $UUID
 */
class OntapSnapshotConfiguration extends Shape
{
    /**
     * @param array{
     *     SizeInMegabytes?: int<0, max>|null,
     *     SnapmirrorLabel?: string|null,
     *     ExpiryTime?: \Aws\Api\DateTimeResult|null,
     *     SnaplockExpiryTime?: \Aws\Api\DateTimeResult|null,
     *     UUID?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
