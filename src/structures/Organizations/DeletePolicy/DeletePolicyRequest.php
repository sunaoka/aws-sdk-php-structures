<?php

namespace Sunaoka\Aws\Structures\Organizations\DeletePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyId
 */
class DeletePolicyRequest extends Request
{
    /**
     * @param array{PolicyId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
