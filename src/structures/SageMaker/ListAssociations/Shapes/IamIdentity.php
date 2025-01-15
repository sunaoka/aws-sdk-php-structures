<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $PrincipalId
 * @property string|null $SourceIdentity
 */
class IamIdentity extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     PrincipalId?: string|null,
     *     SourceIdentity?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
