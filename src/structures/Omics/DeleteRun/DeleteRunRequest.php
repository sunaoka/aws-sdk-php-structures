<?php

namespace Sunaoka\Aws\Structures\Omics\DeleteRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DeleteRunRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
