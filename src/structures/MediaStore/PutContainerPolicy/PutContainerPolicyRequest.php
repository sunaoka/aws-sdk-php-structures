<?php

namespace Sunaoka\Aws\Structures\MediaStore\PutContainerPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContainerName
 * @property string $Policy
 */
class PutContainerPolicyRequest extends Request
{
    /**
     * @param array{
     *     ContainerName: string,
     *     Policy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
