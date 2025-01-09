<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\CreateDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectName
 * @property string $DatasetType
 * @property Shapes\DatasetSource $DatasetSource
 * @property string $ClientToken
 */
class CreateDatasetRequest extends Request
{
    /**
     * @param array{
     *     ProjectName: string,
     *     DatasetType: string,
     *     DatasetSource?: Shapes\DatasetSource,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
