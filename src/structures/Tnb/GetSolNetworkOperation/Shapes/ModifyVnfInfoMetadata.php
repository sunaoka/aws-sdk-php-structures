<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolNetworkOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Document $vnfConfigurableProperties
 * @property string $vnfInstanceId
 */
class ModifyVnfInfoMetadata extends Shape
{
    /**
     * @param array{
     *     vnfConfigurableProperties: Document,
     *     vnfInstanceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
