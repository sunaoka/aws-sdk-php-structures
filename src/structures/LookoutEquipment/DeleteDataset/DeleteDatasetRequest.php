<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DeleteDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatasetName
 */
class DeleteDatasetRequest extends Request
{
    /**
     * @param array{DatasetName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
