<?php

namespace Sunaoka\Aws\Structures\SnowBall\CancelCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 */
class CancelClusterRequest extends Request
{
    /**
     * @param array{ClusterId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
