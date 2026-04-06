<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DeleteInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 */
class DeleteInstanceRequest extends Request
{
    /**
     * @param array{InstanceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
