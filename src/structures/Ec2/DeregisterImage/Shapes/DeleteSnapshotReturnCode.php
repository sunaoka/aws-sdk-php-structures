<?php

namespace Sunaoka\Aws\Structures\Ec2\DeregisterImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SnapshotId
 * @property 'success'|'skipped'|'missing-permissions'|'internal-error'|'client-error'|null $ReturnCode
 */
class DeleteSnapshotReturnCode extends Shape
{
    /**
     * @param array{
     *     SnapshotId?: string|null,
     *     ReturnCode?: 'success'|'skipped'|'missing-permissions'|'internal-error'|'client-error'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
