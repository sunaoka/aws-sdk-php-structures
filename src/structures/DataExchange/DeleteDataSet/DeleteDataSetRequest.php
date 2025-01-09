<?php

namespace Sunaoka\Aws\Structures\DataExchange\DeleteDataSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataSetId
 */
class DeleteDataSetRequest extends Request
{
    /**
     * @param array{DataSetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
