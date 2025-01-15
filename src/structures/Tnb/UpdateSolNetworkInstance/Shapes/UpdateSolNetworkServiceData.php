<?php

namespace Sunaoka\Aws\Structures\Tnb\UpdateSolNetworkInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Document|null $additionalParamsForNs
 * @property string $nsdInfoId
 */
class UpdateSolNetworkServiceData extends Shape
{
    /**
     * @param array{
     *     additionalParamsForNs?: Document|null,
     *     nsdInfoId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
