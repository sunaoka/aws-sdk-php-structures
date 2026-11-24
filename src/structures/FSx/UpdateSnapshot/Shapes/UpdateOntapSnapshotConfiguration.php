<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SnapmirrorLabel
 * @property \Aws\Api\DateTimeResult|null $ExpiryTime
 * @property \Aws\Api\DateTimeResult|null $SnaplockExpiryTime
 */
class UpdateOntapSnapshotConfiguration extends Shape
{
    /**
     * @param array{
     *     SnapmirrorLabel?: string|null,
     *     ExpiryTime?: \Aws\Api\DateTimeResult|null,
     *     SnaplockExpiryTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
