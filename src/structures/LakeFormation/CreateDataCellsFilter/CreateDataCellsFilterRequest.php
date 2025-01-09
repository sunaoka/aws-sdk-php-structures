<?php

namespace Sunaoka\Aws\Structures\LakeFormation\CreateDataCellsFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DataCellsFilter $TableData
 */
class CreateDataCellsFilterRequest extends Request
{
    /**
     * @param array{TableData: Shapes\DataCellsFilter} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
