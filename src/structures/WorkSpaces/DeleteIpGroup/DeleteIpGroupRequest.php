<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DeleteIpGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupId
 */
class DeleteIpGroupRequest extends Request
{
    /**
     * @param array{GroupId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
