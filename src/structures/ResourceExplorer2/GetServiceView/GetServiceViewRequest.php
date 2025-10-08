<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\GetServiceView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceViewArn
 */
class GetServiceViewRequest extends Request
{
    /**
     * @param array{ServiceViewArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
