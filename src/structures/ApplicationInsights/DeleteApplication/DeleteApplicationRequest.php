<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\DeleteApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceGroupName
 */
class DeleteApplicationRequest extends Request
{
    /**
     * @param array{ResourceGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
