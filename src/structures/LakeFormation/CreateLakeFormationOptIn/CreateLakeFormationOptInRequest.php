<?php

namespace Sunaoka\Aws\Structures\LakeFormation\CreateLakeFormationOptIn;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DataLakePrincipal $Principal
 * @property Shapes\Resource $Resource
 */
class CreateLakeFormationOptInRequest extends Request
{
    /**
     * @param array{
     *     Principal: Shapes\DataLakePrincipal,
     *     Resource: Shapes\Resource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
