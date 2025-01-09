<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\UpdateDatasetEntries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectName
 * @property string $DatasetType
 * @property string $Changes
 * @property string $ClientToken
 */
class UpdateDatasetEntriesRequest extends Request
{
    /**
     * @param array{
     *     ProjectName: string,
     *     DatasetType: string,
     *     Changes: string,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
