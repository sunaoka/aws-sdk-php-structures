<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupId
 */
class GetGroupRequest extends Request
{
    /**
     * @param array{GroupId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
