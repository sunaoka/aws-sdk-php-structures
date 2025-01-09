<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeContext\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $PrincipalId
 * @property string $SourceIdentity
 */
class IamIdentity extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     PrincipalId?: string,
     *     SourceIdentity?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
