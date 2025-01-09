<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IAM_IDC'|'DISABLED' $type
 * @property 'AUTOMATIC'|'MANUAL' $userAssignment
 */
class SingleSignOn extends Shape
{
    /**
     * @param array{
     *     type?: 'IAM_IDC'|'DISABLED',
     *     userAssignment?: 'AUTOMATIC'|'MANUAL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
