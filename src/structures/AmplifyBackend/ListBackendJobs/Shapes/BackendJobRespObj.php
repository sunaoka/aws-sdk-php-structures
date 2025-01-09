<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\ListBackendJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AppId
 * @property string $BackendEnvironmentName
 * @property string $CreateTime
 * @property string $Error
 * @property string $JobId
 * @property string $Operation
 * @property string $Status
 * @property string $UpdateTime
 */
class BackendJobRespObj extends Shape
{
    /**
     * @param array{
     *     AppId: string,
     *     BackendEnvironmentName: string,
     *     CreateTime?: string,
     *     Error?: string,
     *     JobId?: string,
     *     Operation?: string,
     *     Status?: string,
     *     UpdateTime?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
