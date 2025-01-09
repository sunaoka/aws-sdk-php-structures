<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobName
 */
class DeleteJobRequest extends Request
{
    /**
     * @param array{JobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
