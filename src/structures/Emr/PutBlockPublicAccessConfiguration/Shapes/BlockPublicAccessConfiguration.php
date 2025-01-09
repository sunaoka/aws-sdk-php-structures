<?php

namespace Sunaoka\Aws\Structures\Emr\PutBlockPublicAccessConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $BlockPublicSecurityGroupRules
 * @property list<PortRange> $PermittedPublicSecurityGroupRuleRanges
 */
class BlockPublicAccessConfiguration extends Shape
{
    /**
     * @param array{
     *     BlockPublicSecurityGroupRules: bool,
     *     PermittedPublicSecurityGroupRuleRanges?: list<PortRange>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
