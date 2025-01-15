<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\CreateDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectName
 * @property string $DatasetType
 * @property Shapes\DatasetSource|null $DatasetSource
 * @property string|null $ClientToken
 */
class CreateDatasetRequest extends Request
{
    /**
     * @param array{
     *     ProjectName: string,
     *     DatasetType: string,
     *     DatasetSource?: Shapes\DatasetSource|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
