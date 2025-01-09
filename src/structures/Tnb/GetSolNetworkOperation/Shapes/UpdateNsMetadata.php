<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolNetworkOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Document $additionalParamsForNs
 * @property string $nsdInfoId
 */
class UpdateNsMetadata extends Shape
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
