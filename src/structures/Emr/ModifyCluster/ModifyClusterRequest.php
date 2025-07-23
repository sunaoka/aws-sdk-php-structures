<?php

namespace Sunaoka\Aws\Structures\Emr\ModifyCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property int|null $StepConcurrencyLevel
 * @property bool|null $ExtendedSupport
 */
class ModifyClusterRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     StepConcurrencyLevel?: int|null,
     *     ExtendedSupport?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
