<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListLakeFormationOptIns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Resource|null $Resource
 * @property DataLakePrincipal|null $Principal
 * @property Condition|null $Condition
 * @property \Aws\Api\DateTimeResult|null $LastModified
 * @property string|null $LastUpdatedBy
 */
class LakeFormationOptInsInfo extends Shape
{
    /**
     * @param array{
     *     Resource?: Resource|null,
     *     Principal?: DataLakePrincipal|null,
     *     Condition?: Condition|null,
     *     LastModified?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedBy?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
