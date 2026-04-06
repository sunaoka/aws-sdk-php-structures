<?php

namespace Sunaoka\Aws\Structures\Connect\ListSecurityProfileApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Namespace
 * @property list<string>|null $ApplicationPermissions
 * @property 'MCP'|'THIRD_PARTY_APPLICATION'|null $Type
 */
class Application extends Shape
{
    /**
     * @param array{
     *     Namespace?: string|null,
     *     ApplicationPermissions?: list<string>|null,
     *     Type?: 'MCP'|'THIRD_PARTY_APPLICATION'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
