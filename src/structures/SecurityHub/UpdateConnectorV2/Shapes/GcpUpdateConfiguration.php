<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateConnectorV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GcpScopeConfiguration $ScopeConfiguration
 * @property list<string> $GCPRegions
 */
class GcpUpdateConfiguration extends Shape
{
    /**
     * @param array{
     *     ScopeConfiguration: GcpScopeConfiguration,
     *     GCPRegions: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
