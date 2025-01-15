<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CreateComponentVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LambdaEventSource>|null $eventSources
 * @property int|null $maxQueueSize
 * @property int|null $maxInstancesCount
 * @property int|null $maxIdleTimeInSeconds
 * @property int|null $timeoutInSeconds
 * @property int|null $statusTimeoutInSeconds
 * @property bool|null $pinned
 * @property 'json'|'binary'|null $inputPayloadEncodingType
 * @property list<string>|null $execArgs
 * @property array<string, string>|null $environmentVariables
 * @property LambdaLinuxProcessParams|null $linuxProcessParams
 */
class LambdaExecutionParameters extends Shape
{
    /**
     * @param array{
     *     eventSources?: list<LambdaEventSource>|null,
     *     maxQueueSize?: int|null,
     *     maxInstancesCount?: int|null,
     *     maxIdleTimeInSeconds?: int|null,
     *     timeoutInSeconds?: int|null,
     *     statusTimeoutInSeconds?: int|null,
     *     pinned?: bool|null,
     *     inputPayloadEncodingType?: 'json'|'binary'|null,
     *     execArgs?: list<string>|null,
     *     environmentVariables?: array<string, string>|null,
     *     linuxProcessParams?: LambdaLinuxProcessParams|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
