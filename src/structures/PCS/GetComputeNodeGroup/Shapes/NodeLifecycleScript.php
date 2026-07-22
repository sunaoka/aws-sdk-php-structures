<?php

namespace Sunaoka\Aws\Structures\PCS\GetComputeNodeGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property ScriptSource $scriptSource
 * @property list<string>|null $arguments
 * @property 'TERMINATE'|'STOP_SEQUENCE'|'CONTINUE'|null $onError
 * @property 'FIRST_BOOT_ONLY'|'EVERY_BOOT'|null $executionPolicy
 */
class NodeLifecycleScript extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     scriptSource: ScriptSource,
     *     arguments?: list<string>|null,
     *     onError?: 'TERMINATE'|'STOP_SEQUENCE'|'CONTINUE'|null,
     *     executionPolicy?: 'FIRST_BOOT_ONLY'|'EVERY_BOOT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
