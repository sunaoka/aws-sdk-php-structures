<?php

namespace Sunaoka\Aws\Structures\Tnb\UpdateSolNetworkInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Document $additionalParamsForNs
 * @property string $nsdInfoId
 */
class UpdateSolNetworkServiceData extends Shape
{
    /**
     * @param array{
     *     additionalParamsForNs?: Document,
     *     nsdInfoId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
