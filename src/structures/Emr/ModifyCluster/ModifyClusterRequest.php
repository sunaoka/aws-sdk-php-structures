<?php

namespace Sunaoka\Aws\Structures\Emr\ModifyCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property int $StepConcurrencyLevel
 */
class ModifyClusterRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     StepConcurrencyLevel?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
