<?php

namespace Sunaoka\Aws\Structures\Rekognition\UpdateDatasetEntries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatasetArn
 * @property Shapes\DatasetChanges $Changes
 */
class UpdateDatasetEntriesRequest extends Request
{
    /**
     * @param array{
     *     DatasetArn: string,
     *     Changes: Shapes\DatasetChanges
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
