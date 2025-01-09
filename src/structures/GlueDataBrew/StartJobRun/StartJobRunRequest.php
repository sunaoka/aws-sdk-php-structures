<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\StartJobRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class StartJobRunRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
