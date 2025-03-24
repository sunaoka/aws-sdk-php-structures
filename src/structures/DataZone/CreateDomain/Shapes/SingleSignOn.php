<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $idcInstanceArn
 * @property 'IAM_IDC'|'DISABLED'|null $type
 * @property 'AUTOMATIC'|'MANUAL'|null $userAssignment
 */
class SingleSignOn extends Shape
{
    /**
     * @param array{
     *     idcInstanceArn?: string|null,
     *     type?: 'IAM_IDC'|'DISABLED'|null,
     *     userAssignment?: 'AUTOMATIC'|'MANUAL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
