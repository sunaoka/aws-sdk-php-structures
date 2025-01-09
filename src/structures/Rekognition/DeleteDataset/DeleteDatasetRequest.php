<?php

namespace Sunaoka\Aws\Structures\Rekognition\DeleteDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatasetArn
 */
class DeleteDatasetRequest extends Request
{
    /**
     * @param array{DatasetArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
