<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DeleteLakeFormationOptIn;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DataLakePrincipal $Principal
 * @property Shapes\Resource $Resource
 * @property Shapes\Condition|null $Condition
 */
class DeleteLakeFormationOptInRequest extends Request
{
    /**
     * @param array{
     *     Principal: Shapes\DataLakePrincipal,
     *     Resource: Shapes\Resource,
     *     Condition?: Shapes\Condition|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
