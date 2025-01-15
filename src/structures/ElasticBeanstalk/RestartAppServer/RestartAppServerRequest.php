<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\RestartAppServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $EnvironmentId
 * @property string|null $EnvironmentName
 */
class RestartAppServerRequest extends Request
{
    /**
     * @param array{
     *     EnvironmentId?: string|null,
     *     EnvironmentName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
