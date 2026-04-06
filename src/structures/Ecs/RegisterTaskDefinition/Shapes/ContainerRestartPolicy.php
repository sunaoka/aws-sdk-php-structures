<?php

namespace Sunaoka\Aws\Structures\Ecs\RegisterTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property list<int>|null $ignoredExitCodes
 * @property int|null $restartAttemptPeriod
 */
class ContainerRestartPolicy extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     ignoredExitCodes?: list<int>|null,
     *     restartAttemptPeriod?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
