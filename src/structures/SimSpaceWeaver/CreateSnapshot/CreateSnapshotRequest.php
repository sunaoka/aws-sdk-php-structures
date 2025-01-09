<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\CreateSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\S3Destination $Destination
 * @property string $Simulation
 */
class CreateSnapshotRequest extends Request
{
    /**
     * @param array{
     *     Destination: Shapes\S3Destination,
     *     Simulation: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
