<?php

namespace Sunaoka\Aws\Structures\MediaStore\PutLifecyclePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContainerName
 * @property string $LifecyclePolicy
 */
class PutLifecyclePolicyRequest extends Request
{
    /**
     * @param array{
     *     ContainerName: string,
     *     LifecyclePolicy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
