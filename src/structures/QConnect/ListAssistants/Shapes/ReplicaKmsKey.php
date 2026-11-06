<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAssistants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 */
class ReplicaKmsKey extends Shape
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
