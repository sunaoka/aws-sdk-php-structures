<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DeleteJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteJobRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
