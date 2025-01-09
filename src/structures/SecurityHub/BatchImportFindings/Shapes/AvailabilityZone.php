<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ZoneName
 * @property string $SubnetId
 */
class AvailabilityZone extends Shape
{
    /**
     * @param array{
     *     ZoneName?: string,
     *     SubnetId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
