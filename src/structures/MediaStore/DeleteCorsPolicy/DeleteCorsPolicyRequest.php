<?php

namespace Sunaoka\Aws\Structures\MediaStore\DeleteCorsPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContainerName
 */
class DeleteCorsPolicyRequest extends Request
{
    /**
     * @param array{ContainerName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
