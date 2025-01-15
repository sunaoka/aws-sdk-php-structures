<?php

namespace Sunaoka\Aws\Structures\XRay\DeleteGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $GroupName
 * @property string|null $GroupARN
 */
class DeleteGroupRequest extends Request
{
    /**
     * @param array{
     *     GroupName?: string|null,
     *     GroupARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
