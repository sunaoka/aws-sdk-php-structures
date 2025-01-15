<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $PercentTraffic
 * @property string|null $DeploymentId
 * @property array<string, string>|null $StageVariableOverrides
 * @property bool|null $UseStageCache
 */
class AwsApiGatewayCanarySettings extends Shape
{
    /**
     * @param array{
     *     PercentTraffic?: double|null,
     *     DeploymentId?: string|null,
     *     StageVariableOverrides?: array<string, string>|null,
     *     UseStageCache?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
