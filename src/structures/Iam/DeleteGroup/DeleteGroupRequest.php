<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 */
class DeleteGroupRequest extends Request
{
    /**
     * @param array{GroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
