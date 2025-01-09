<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DeleteActionTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ActionTargetArn
 */
class DeleteActionTargetRequest extends Request
{
    /**
     * @param array{ActionTargetArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
