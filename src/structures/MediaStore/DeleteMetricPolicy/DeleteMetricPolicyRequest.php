<?php

namespace Sunaoka\Aws\Structures\MediaStore\DeleteMetricPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContainerName
 */
class DeleteMetricPolicyRequest extends Request
{
    /**
     * @param array{ContainerName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
