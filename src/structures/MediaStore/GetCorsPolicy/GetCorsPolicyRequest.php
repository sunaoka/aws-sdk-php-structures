<?php

namespace Sunaoka\Aws\Structures\MediaStore\GetCorsPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContainerName
 */
class GetCorsPolicyRequest extends Request
{
    /**
     * @param array{ContainerName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
