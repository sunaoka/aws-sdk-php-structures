<?php

namespace Sunaoka\Aws\Structures\imagebuilder\PutImagePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $imageArn
 * @property string $policy
 */
class PutImagePolicyRequest extends Request
{
    /**
     * @param array{
     *     imageArn: string,
     *     policy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
