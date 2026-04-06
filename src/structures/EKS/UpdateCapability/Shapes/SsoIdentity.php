<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateCapability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property 'SSO_USER'|'SSO_GROUP' $type
 */
class SsoIdentity extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     type: 'SSO_USER'|'SSO_GROUP'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
