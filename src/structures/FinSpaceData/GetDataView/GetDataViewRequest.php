<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\GetDataView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dataViewId
 * @property string $datasetId
 */
class GetDataViewRequest extends Request
{
    /**
     * @param array{
     *     dataViewId: string,
     *     datasetId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
