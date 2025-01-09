<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolNetworkInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $nsLcmOpOccId
 */
class LcmOperationInfo extends Shape
{
    /**
     * @param array{nsLcmOpOccId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
