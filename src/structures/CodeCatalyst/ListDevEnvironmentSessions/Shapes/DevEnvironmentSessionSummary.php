<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListDevEnvironmentSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $spaceName
 * @property string $projectName
 * @property string $devEnvironmentId
 * @property \Aws\Api\DateTimeResult $startedTime
 * @property string $id
 */
class DevEnvironmentSessionSummary extends Shape
{
    /**
     * @param array{
     *     spaceName: string,
     *     projectName: string,
     *     devEnvironmentId: string,
     *     startedTime: \Aws\Api\DateTimeResult,
     *     id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
