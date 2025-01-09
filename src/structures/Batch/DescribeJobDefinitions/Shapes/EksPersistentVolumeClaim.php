<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $claimName
 * @property bool $readOnly
 */
class EksPersistentVolumeClaim extends Shape
{
    /**
     * @param array{
     *     claimName: string,
     *     readOnly?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
