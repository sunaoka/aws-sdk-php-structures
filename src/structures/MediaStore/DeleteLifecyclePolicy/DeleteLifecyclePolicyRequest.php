<?php

namespace Sunaoka\Aws\Structures\MediaStore\DeleteLifecyclePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContainerName
 */
class DeleteLifecyclePolicyRequest extends Request
{
    /**
     * @param array{ContainerName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
