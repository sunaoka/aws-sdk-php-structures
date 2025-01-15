<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ZoneName
 * @property string|null $SubnetId
 */
class AvailabilityZone extends Shape
{
    /**
     * @param array{
     *     ZoneName?: string|null,
     *     SubnetId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
