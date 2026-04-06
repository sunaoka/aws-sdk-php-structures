<?php

namespace Sunaoka\Aws\Structures\LakeFormation\CreateLakeFormationOptIn;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DataLakePrincipal $Principal
 * @property Shapes\ResourceShape $Resource
 */
class CreateLakeFormationOptInRequest extends Request
{
    /**
     * @param array{
     *     Principal: Shapes\DataLakePrincipal,
     *     Resource: Shapes\ResourceShape
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
