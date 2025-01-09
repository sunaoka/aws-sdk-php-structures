<?php

namespace Sunaoka\Aws\Structures\Iam\DeletePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyArn
 */
class DeletePolicyRequest extends Request
{
    /**
     * @param array{PolicyArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
