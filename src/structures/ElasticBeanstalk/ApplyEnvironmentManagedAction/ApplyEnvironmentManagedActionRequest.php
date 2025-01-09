<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\ApplyEnvironmentManagedAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EnvironmentName
 * @property string $EnvironmentId
 * @property string $ActionId
 */
class ApplyEnvironmentManagedActionRequest extends Request
{
    /**
     * @param array{
     *     EnvironmentName?: string,
     *     EnvironmentId?: string,
     *     ActionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
