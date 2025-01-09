<?php

namespace Sunaoka\Aws\Structures\ForecastService\DeleteDatasetImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatasetImportJobArn
 */
class DeleteDatasetImportJobRequest extends Request
{
    /**
     * @param array{DatasetImportJobArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
