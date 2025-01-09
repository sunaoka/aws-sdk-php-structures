<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\DeleteCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 */
class DeleteClusterRequest extends Request
{
    /**
     * @param array{ClusterId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
