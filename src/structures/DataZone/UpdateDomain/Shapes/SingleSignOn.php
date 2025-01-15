<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IAM_IDC'|'DISABLED'|null $type
 * @property 'AUTOMATIC'|'MANUAL'|null $userAssignment
 */
class SingleSignOn extends Shape
{
    /**
     * @param array{
     *     type?: 'IAM_IDC'|'DISABLED'|null,
     *     userAssignment?: 'AUTOMATIC'|'MANUAL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
