<?php

namespace Sunaoka\Aws\Structures\MediaStore\GetMetricPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContainerName
 */
class GetMetricPolicyRequest extends Request
{
    /**
     * @param array{ContainerName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
