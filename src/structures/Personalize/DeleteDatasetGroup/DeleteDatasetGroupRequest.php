<?php

namespace Sunaoka\Aws\Structures\Personalize\DeleteDatasetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetGroupArn
 */
class DeleteDatasetGroupRequest extends Request
{
    /**
     * @param array{datasetGroupArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
