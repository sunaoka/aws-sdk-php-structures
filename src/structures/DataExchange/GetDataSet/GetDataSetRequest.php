<?php

namespace Sunaoka\Aws\Structures\DataExchange\GetDataSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataSetId
 */
class GetDataSetRequest extends Request
{
    /**
     * @param array{DataSetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
