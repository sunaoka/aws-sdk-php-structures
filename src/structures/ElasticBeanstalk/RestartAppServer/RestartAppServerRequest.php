<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\RestartAppServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EnvironmentId
 * @property string $EnvironmentName
 */
class RestartAppServerRequest extends Request
{
    /**
     * @param array{
     *     EnvironmentId?: string,
     *     EnvironmentName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
