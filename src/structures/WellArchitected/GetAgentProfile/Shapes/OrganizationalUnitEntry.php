<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $organizationalUnitId
 * @property list<string> $regions
 */
class OrganizationalUnitEntry extends Shape
{
    /**
     * @param array{
     *     organizationalUnitId: string,
     *     regions: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
