<?php

namespace Sunaoka\Aws\Structures\Neptune\DeleteDBInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Domain
 * @property string|null $Status
 * @property string|null $FQDN
 * @property string|null $IAMRoleName
 */
class DomainMembership extends Shape
{
    /**
     * @param array{
     *     Domain?: string|null,
     *     Status?: string|null,
     *     FQDN?: string|null,
     *     IAMRoleName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
