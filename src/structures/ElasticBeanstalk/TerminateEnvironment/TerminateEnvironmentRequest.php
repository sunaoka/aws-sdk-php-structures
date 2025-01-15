<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\TerminateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $EnvironmentId
 * @property string|null $EnvironmentName
 * @property bool|null $TerminateResources
 * @property bool|null $ForceTerminate
 */
class TerminateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     EnvironmentId?: string|null,
     *     EnvironmentName?: string|null,
     *     TerminateResources?: bool|null,
     *     ForceTerminate?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
