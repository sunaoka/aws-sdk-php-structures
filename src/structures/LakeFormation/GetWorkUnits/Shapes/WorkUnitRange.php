<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetWorkUnits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $WorkUnitIdMax
 * @property int $WorkUnitIdMin
 * @property string $WorkUnitToken
 */
class WorkUnitRange extends Shape
{
    /**
     * @param array{
     *     WorkUnitIdMax: int,
     *     WorkUnitIdMin: int,
     *     WorkUnitToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
