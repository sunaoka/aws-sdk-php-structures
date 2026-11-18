<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetConnectorV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AWSConfigConnectorArn
 * @property GcpScopeConfiguration $ScopeConfiguration
 * @property list<string> $GCPRegions
 */
class GcpDetail extends Shape
{
    /**
     * @param array{
     *     AWSConfigConnectorArn: string,
     *     ScopeConfiguration: GcpScopeConfiguration,
     *     GCPRegions: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
