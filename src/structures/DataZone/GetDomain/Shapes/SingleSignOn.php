<?php

namespace Sunaoka\Aws\Structures\DataZone\GetDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IAM_IDC'|'DISABLED'|null $type
 * @property 'AUTOMATIC'|'MANUAL'|null $userAssignment
 * @property string|null $idcInstanceArn
 */
class SingleSignOn extends Shape
{
    /**
     * @param array{
     *     type?: 'IAM_IDC'|'DISABLED'|null,
     *     userAssignment?: 'AUTOMATIC'|'MANUAL'|null,
     *     idcInstanceArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
