<?php

namespace Sunaoka\Aws\Structures\Greengrass\DeleteGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupId
 */
class DeleteGroupRequest extends Request
{
    /**
     * @param array{GroupId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
