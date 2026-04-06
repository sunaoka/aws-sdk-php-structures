<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\GetManagedView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ManagedViewArn
 */
class GetManagedViewRequest extends Request
{
    /**
     * @param array{ManagedViewArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
