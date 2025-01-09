<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetRecoveryPoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recoveryPointId
 */
class GetRecoveryPointRequest extends Request
{
    /**
     * @param array{recoveryPointId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
