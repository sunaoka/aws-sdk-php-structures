<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $PercentTraffic
 * @property string $DeploymentId
 * @property array<string, string> $StageVariableOverrides
 * @property bool $UseStageCache
 */
class AwsApiGatewayCanarySettings extends Shape
{
    /**
     * @param array{
     *     PercentTraffic?: double,
     *     DeploymentId?: string,
     *     StageVariableOverrides?: array<string, string>,
     *     UseStageCache?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
