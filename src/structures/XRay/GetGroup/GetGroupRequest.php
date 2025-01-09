<?php

namespace Sunaoka\Aws\Structures\XRay\GetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 * @property string $GroupARN
 */
class GetGroupRequest extends Request
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
