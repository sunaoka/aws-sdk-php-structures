<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\GetWorkload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workloadName
 */
class GetWorkloadRequest extends Request
{
    /**
     * @param array{workloadName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
