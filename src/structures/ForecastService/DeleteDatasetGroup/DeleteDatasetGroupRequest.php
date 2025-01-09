<?php

namespace Sunaoka\Aws\Structures\ForecastService\DeleteDatasetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatasetGroupArn
 */
class DeleteDatasetGroupRequest extends Request
{
    /**
     * @param array{DatasetGroupArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
