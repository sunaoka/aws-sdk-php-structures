<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\CreatePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $remediationEnabled
 * @property bool $resourcesCleanUp
 * @property WafConfig|null $wafConfig
 */
class PolicyConfiguration extends Shape
{
    /**
     * @param array{
     *     remediationEnabled: bool,
     *     resourcesCleanUp: bool,
     *     wafConfig?: WafConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
