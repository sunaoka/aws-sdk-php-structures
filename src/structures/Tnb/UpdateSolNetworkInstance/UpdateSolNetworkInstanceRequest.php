<?php

namespace Sunaoka\Aws\Structures\Tnb\UpdateSolNetworkInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\UpdateSolNetworkModify $modifyVnfInfoData
 * @property string $nsInstanceId
 * @property array<string, string> $tags
 * @property Shapes\UpdateSolNetworkServiceData $updateNs
 * @property 'MODIFY_VNF_INFORMATION'|'UPDATE_NS' $updateType
 */
class UpdateSolNetworkInstanceRequest extends Request
{
    /**
     * @param array{
     *     modifyVnfInfoData?: Shapes\UpdateSolNetworkModify,
     *     nsInstanceId: string,
     *     tags?: array<string, string>,
     *     updateNs?: Shapes\UpdateSolNetworkServiceData,
     *     updateType: 'MODIFY_VNF_INFORMATION'|'UPDATE_NS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
