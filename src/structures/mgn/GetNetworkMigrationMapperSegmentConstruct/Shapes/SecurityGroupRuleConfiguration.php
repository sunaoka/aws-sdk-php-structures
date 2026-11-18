<?php

namespace Sunaoka\Aws\Structures\mgn\GetNetworkMigrationMapperSegmentConstruct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enableReferencing
 */
class SecurityGroupRuleConfiguration extends Shape
{
    /**
     * @param array{enableReferencing?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
