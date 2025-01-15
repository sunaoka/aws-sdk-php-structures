<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\ApplyEnvironmentManagedAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $EnvironmentName
 * @property string|null $EnvironmentId
 * @property string $ActionId
 */
class ApplyEnvironmentManagedActionRequest extends Request
{
    /**
     * @param array{
     *     EnvironmentName?: string|null,
     *     EnvironmentId?: string|null,
     *     ActionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
