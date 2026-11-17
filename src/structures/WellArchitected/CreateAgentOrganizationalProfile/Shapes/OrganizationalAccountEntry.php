<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateAgentOrganizationalProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property list<string> $regions
 */
class OrganizationalAccountEntry extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     regions: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
