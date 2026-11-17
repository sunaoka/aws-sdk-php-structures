<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentOrganizationalReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $organizationalUnitId
 * @property string $reason
 */
class FailedOrganizationalUnit extends Shape
{
    /**
     * @param array{
     *     organizationalUnitId: string,
     *     reason: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
