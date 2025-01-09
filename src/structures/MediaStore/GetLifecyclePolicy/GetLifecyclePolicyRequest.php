<?php

namespace Sunaoka\Aws\Structures\MediaStore\GetLifecyclePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContainerName
 */
class GetLifecyclePolicyRequest extends Request
{
    /**
     * @param array{ContainerName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
