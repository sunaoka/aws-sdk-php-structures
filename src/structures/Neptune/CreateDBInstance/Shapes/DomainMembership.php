<?php

namespace Sunaoka\Aws\Structures\Neptune\CreateDBInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Domain
 * @property string $Status
 * @property string $FQDN
 * @property string $IAMRoleName
 */
class DomainMembership extends Shape
{
    /**
     * @param array{
     *     Domain?: string,
     *     Status?: string,
     *     FQDN?: string,
     *     IAMRoleName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
