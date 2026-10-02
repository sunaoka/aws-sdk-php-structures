<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\CreateWebFunctionRevision\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $executionRoleArn
 * @property int<3, 900>|null $timeoutSeconds
 * @property int<1, 128>|null $maxConcurrencyPerEnvironment
 * @property array<string, string>|null $environmentVariables
 * @property TelemetryConfig|null $telemetryConfig
 */
class ServiceConfig extends Shape
{
    /**
     * @param array{
     *     executionRoleArn: string,
     *     timeoutSeconds?: int<3, 900>|null,
     *     maxConcurrencyPerEnvironment?: int<1, 128>|null,
     *     environmentVariables?: array<string, string>|null,
     *     telemetryConfig?: TelemetryConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
