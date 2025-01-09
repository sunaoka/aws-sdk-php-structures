<?php

namespace Sunaoka\Aws\Structures\CodeBuild\DeleteResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 */
class DeleteResourcePolicyRequest extends Request
{
    /**
     * @param array{resourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
