<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImagePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $imageArn
 */
class GetImagePolicyRequest extends Request
{
    /**
     * @param array{imageArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
