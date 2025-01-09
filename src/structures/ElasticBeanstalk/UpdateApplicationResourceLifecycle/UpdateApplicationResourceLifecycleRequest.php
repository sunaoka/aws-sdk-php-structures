<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\UpdateApplicationResourceLifecycle;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property Shapes\ApplicationResourceLifecycleConfig $ResourceLifecycleConfig
 */
class UpdateApplicationResourceLifecycleRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     ResourceLifecycleConfig: Shapes\ApplicationResourceLifecycleConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
