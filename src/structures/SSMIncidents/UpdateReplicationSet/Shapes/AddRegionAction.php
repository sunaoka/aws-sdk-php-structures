<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\UpdateReplicationSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $regionName
 * @property string $sseKmsKeyId
 */
class AddRegionAction extends Shape
{
    /**
     * @param array{
     *     regionName: string,
     *     sseKmsKeyId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
