<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 */
class DeleteInstanceRequest extends Request
{
    /**
     * @param array{InstanceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
