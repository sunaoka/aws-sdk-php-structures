<?php

namespace Sunaoka\Aws\Structures\Personalize\DeleteDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetArn
 */
class DeleteDatasetRequest extends Request
{
    /**
     * @param array{datasetArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
