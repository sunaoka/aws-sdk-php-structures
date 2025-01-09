<?php

namespace Sunaoka\Aws\Structures\Rekognition\DistributeDatasetEntries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\DistributeDataset> $Datasets
 */
class DistributeDatasetEntriesRequest extends Request
{
    /**
     * @param array{Datasets: list<Shapes\DistributeDataset>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
