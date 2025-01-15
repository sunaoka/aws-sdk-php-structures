<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\ListBackendJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AppId
 * @property string $BackendEnvironmentName
 * @property string|null $CreateTime
 * @property string|null $Error
 * @property string|null $JobId
 * @property string|null $Operation
 * @property string|null $Status
 * @property string|null $UpdateTime
 */
class BackendJobRespObj extends Shape
{
    /**
     * @param array{
     *     AppId: string,
     *     BackendEnvironmentName: string,
     *     CreateTime?: string|null,
     *     Error?: string|null,
     *     JobId?: string|null,
     *     Operation?: string|null,
     *     Status?: string|null,
     *     UpdateTime?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
