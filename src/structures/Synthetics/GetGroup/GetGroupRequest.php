<?php

namespace Sunaoka\Aws\Structures\Synthetics\GetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupIdentifier
 */
class GetGroupRequest extends Request
{
    /**
     * @param array{GroupIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
