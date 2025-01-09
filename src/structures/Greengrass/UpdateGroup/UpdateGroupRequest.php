<?php

namespace Sunaoka\Aws\Structures\Greengrass\UpdateGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupId
 * @property string $Name
 */
class UpdateGroupRequest extends Request
{
    /**
     * @param array{
     *     GroupId: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
