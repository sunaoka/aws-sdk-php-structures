<?php

namespace Sunaoka\Aws\Structures\Ecs\RegisterTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property list<int> $ignoredExitCodes
 * @property int $restartAttemptPeriod
 */
class ContainerRestartPolicy extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     ignoredExitCodes?: list<int>,
     *     restartAttemptPeriod?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
