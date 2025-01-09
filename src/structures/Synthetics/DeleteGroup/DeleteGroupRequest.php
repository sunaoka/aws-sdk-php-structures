<?php

namespace Sunaoka\Aws\Structures\Synthetics\DeleteGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupIdentifier
 */
class DeleteGroupRequest extends Request
{
    /**
     * @param array{GroupIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
