<?php

namespace Sunaoka\Aws\Structures\Ssm\DeleteActivation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ActivationId
 */
class DeleteActivationRequest extends Request
{
    /**
     * @param array{ActivationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
