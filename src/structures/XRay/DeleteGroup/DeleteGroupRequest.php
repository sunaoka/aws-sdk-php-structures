<?php

namespace Sunaoka\Aws\Structures\XRay\DeleteGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 * @property string $GroupARN
 */
class DeleteGroupRequest extends Request
{
    /**
     * @param array{
     *     GroupName?: string,
     *     GroupARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
