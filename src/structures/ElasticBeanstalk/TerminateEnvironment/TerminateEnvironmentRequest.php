<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\TerminateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EnvironmentId
 * @property string $EnvironmentName
 * @property bool $TerminateResources
 * @property bool $ForceTerminate
 */
class TerminateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     EnvironmentId?: string,
     *     EnvironmentName?: string,
     *     TerminateResources?: bool,
     *     ForceTerminate?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
