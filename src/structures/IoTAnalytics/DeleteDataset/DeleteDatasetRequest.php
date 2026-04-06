<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DeleteDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetName
 */
class DeleteDatasetRequest extends Request
{
    /**
     * @param array{datasetName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
