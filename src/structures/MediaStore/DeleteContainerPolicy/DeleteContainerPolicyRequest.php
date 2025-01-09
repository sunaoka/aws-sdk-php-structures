<?php

namespace Sunaoka\Aws\Structures\MediaStore\DeleteContainerPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContainerName
 */
class DeleteContainerPolicyRequest extends Request
{
    /**
     * @param array{ContainerName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
