<?php

namespace Sunaoka\Aws\Structures\Route53\ChangeResourceRecordSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 */
class ResourceRecord extends Shape
{
    /**
     * @param array{Value: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
