<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CreateComponentVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LambdaEventSource> $eventSources
 * @property int $maxQueueSize
 * @property int $maxInstancesCount
 * @property int $maxIdleTimeInSeconds
 * @property int $timeoutInSeconds
 * @property int $statusTimeoutInSeconds
 * @property bool $pinned
 * @property 'json'|'binary' $inputPayloadEncodingType
 * @property list<string> $execArgs
 * @property array<string, string> $environmentVariables
 * @property LambdaLinuxProcessParams $linuxProcessParams
 */
class LambdaExecutionParameters extends Shape
{
    /**
     * @param array{
     *     eventSources?: list<LambdaEventSource>,
     *     maxQueueSize?: int,
     *     maxInstancesCount?: int,
     *     maxIdleTimeInSeconds?: int,
     *     timeoutInSeconds?: int,
     *     statusTimeoutInSeconds?: int,
     *     pinned?: bool,
     *     inputPayloadEncodingType?: 'json'|'binary',
     *     execArgs?: list<string>,
     *     environmentVariables?: array<string, string>,
     *     linuxProcessParams?: LambdaLinuxProcessParams
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
