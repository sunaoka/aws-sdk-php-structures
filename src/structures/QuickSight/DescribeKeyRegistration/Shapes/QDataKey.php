<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeKeyRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $QDataKeyArn
 * @property 'AWS_OWNED'|'CMK'|null $QDataKeyType
 */
class QDataKey extends Shape
{
    /**
     * @param array{
     *     QDataKeyArn?: string|null,
     *     QDataKeyType?: 'AWS_OWNED'|'CMK'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
