<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DeleteDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectName
 * @property string $DatasetType
 * @property string|null $ClientToken
 */
class DeleteDatasetRequest extends Request
{
    /**
     * @param array{
     *     ProjectName: string,
     *     DatasetType: string,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
