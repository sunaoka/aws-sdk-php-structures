<?php

namespace Sunaoka\Aws\Structures\Tnb\ListSolFunctionInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $id
 * @property GetSolInstantiatedVnfInfo $instantiatedVnfInfo
 * @property 'INSTANTIATED'|'NOT_INSTANTIATED' $instantiationState
 * @property ListSolFunctionInstanceMetadata $metadata
 * @property string $nsInstanceId
 * @property string $vnfPkgId
 * @property string $vnfPkgName
 */
class ListSolFunctionInstanceInfo extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     id: string,
     *     instantiatedVnfInfo?: GetSolInstantiatedVnfInfo,
     *     instantiationState: 'INSTANTIATED'|'NOT_INSTANTIATED',
     *     metadata: ListSolFunctionInstanceMetadata,
     *     nsInstanceId: string,
     *     vnfPkgId: string,
     *     vnfPkgName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
