<?php

namespace Sunaoka\Aws\Structures\Tnb\UpdateSolNetworkInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\UpdateSolNetworkModify|null $modifyVnfInfoData
 * @property string $nsInstanceId
 * @property array<string, string>|null $tags
 * @property 'MODIFY_VNF_INFORMATION' $updateType
 */
class UpdateSolNetworkInstanceRequest extends Request
{
    /**
     * @param array{
     *     modifyVnfInfoData?: Shapes\UpdateSolNetworkModify|null,
     *     nsInstanceId: string,
     *     tags?: array<string, string>|null,
     *     updateType: 'MODIFY_VNF_INFORMATION'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
