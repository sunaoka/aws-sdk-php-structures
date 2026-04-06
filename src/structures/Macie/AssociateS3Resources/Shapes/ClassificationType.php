<?php

namespace Sunaoka\Aws\Structures\Macie\AssociateS3Resources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FULL'|'NONE' $oneTime
 * @property 'FULL' $continuous
 */
class ClassificationType extends Shape
{
    /**
     * @param array{
     *     oneTime: 'FULL'|'NONE',
     *     continuous: 'FULL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
