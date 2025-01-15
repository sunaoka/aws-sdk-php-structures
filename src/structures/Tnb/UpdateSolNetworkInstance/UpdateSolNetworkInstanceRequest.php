<?php

namespace Sunaoka\Aws\Structures\Tnb\UpdateSolNetworkInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\UpdateSolNetworkModify|null $modifyVnfInfoData
 * @property string $nsInstanceId
 * @property array<string, string>|null $tags
 * @property Shapes\UpdateSolNetworkServiceData|null $updateNs
 * @property 'MODIFY_VNF_INFORMATION'|'UPDATE_NS' $updateType
 */
class UpdateSolNetworkInstanceRequest extends Request
{
    /**
     * @param array{
     *     modifyVnfInfoData?: Shapes\UpdateSolNetworkModify|null,
     *     nsInstanceId: string,
     *     tags?: array<string, string>|null,
     *     updateNs?: Shapes\UpdateSolNetworkServiceData|null,
     *     updateType: 'MODIFY_VNF_INFORMATION'|'UPDATE_NS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
