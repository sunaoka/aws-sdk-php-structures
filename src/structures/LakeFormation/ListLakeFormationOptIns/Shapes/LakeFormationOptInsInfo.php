<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListLakeFormationOptIns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Resource $Resource
 * @property DataLakePrincipal $Principal
 * @property Condition $Condition
 * @property \Aws\Api\DateTimeResult $LastModified
 * @property string $LastUpdatedBy
 */
class LakeFormationOptInsInfo extends Shape
{
    /**
     * @param array{
     *     Resource?: Resource,
     *     Principal?: DataLakePrincipal,
     *     Condition?: Condition,
     *     LastModified?: \Aws\Api\DateTimeResult,
     *     LastUpdatedBy?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
