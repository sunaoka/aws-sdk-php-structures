<?php

namespace Sunaoka\Aws\Structures\Athena\GetWorkGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkGroup
 */
class GetWorkGroupRequest extends Request
{
    /**
     * @param array{WorkGroup: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
