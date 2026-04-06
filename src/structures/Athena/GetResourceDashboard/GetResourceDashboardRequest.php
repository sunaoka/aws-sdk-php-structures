<?php

namespace Sunaoka\Aws\Structures\Athena\GetResourceDashboard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceARN
 */
class GetResourceDashboardRequest extends Request
{
    /**
     * @param array{ResourceARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
