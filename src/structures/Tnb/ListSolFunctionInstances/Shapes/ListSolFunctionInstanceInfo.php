<?php

namespace Sunaoka\Aws\Structures\Tnb\ListSolFunctionInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $id
 * @property GetSolInstantiatedVnfInfo|null $instantiatedVnfInfo
 * @property 'INSTANTIATED'|'NOT_INSTANTIATED' $instantiationState
 * @property ListSolFunctionInstanceMetadata $metadata
 * @property string $nsInstanceId
 * @property string $vnfPkgId
 * @property string|null $vnfPkgName
 */
class ListSolFunctionInstanceInfo extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     id: string,
     *     instantiatedVnfInfo?: GetSolInstantiatedVnfInfo|null,
     *     instantiationState: 'INSTANTIATED'|'NOT_INSTANTIATED',
     *     metadata: ListSolFunctionInstanceMetadata,
     *     nsInstanceId: string,
     *     vnfPkgId: string,
     *     vnfPkgName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
