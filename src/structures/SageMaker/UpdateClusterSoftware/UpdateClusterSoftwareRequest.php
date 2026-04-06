<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateClusterSoftware;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 */
class UpdateClusterSoftwareRequest extends Request
{
    /**
     * @param array{ClusterName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
