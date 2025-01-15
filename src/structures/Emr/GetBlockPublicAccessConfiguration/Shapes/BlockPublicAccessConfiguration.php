<?php

namespace Sunaoka\Aws\Structures\Emr\GetBlockPublicAccessConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $BlockPublicSecurityGroupRules
 * @property list<PortRange>|null $PermittedPublicSecurityGroupRuleRanges
 */
class BlockPublicAccessConfiguration extends Shape
{
    /**
     * @param array{
     *     BlockPublicSecurityGroupRules: bool,
     *     PermittedPublicSecurityGroupRuleRanges?: list<PortRange>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
