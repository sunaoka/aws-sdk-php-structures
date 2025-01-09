<?php

namespace Sunaoka\Aws\Structures\LakeFormation\UpdateDataCellsFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DataCellsFilter $TableData
 */
class UpdateDataCellsFilterRequest extends Request
{
    /**
     * @param array{TableData: Shapes\DataCellsFilter} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
