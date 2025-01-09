<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\RestoreFromRecoveryPoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $namespaceName
 * @property string $recoveryPointId
 * @property string $workgroupName
 */
class RestoreFromRecoveryPointRequest extends Request
{
    /**
     * @param array{
     *     namespaceName: string,
     *     recoveryPointId: string,
     *     workgroupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
