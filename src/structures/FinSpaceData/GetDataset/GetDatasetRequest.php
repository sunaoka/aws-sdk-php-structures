<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\GetDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetId
 */
class GetDatasetRequest extends Request
{
    /**
     * @param array{datasetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
