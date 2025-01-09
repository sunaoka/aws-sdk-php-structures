<?php

namespace Sunaoka\Aws\Structures\Omics\GetRunGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class GetRunGroupRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
