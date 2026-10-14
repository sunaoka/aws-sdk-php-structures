<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DetachRLSPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\ResourceShape $Resource
 * @property Shapes\DataLakePrincipal|null $Principal
 * @property Shapes\Condition|null $Condition
 * @property bool|null $RemoveDefault
 */
class DetachRLSPolicyRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Resource: Shapes\ResourceShape,
     *     Principal?: Shapes\DataLakePrincipal|null,
     *     Condition?: Shapes\Condition|null,
     *     RemoveDefault?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
