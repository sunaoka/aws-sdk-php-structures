<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\DeleteDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $datasetId
 */
class DeleteDatasetRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     datasetId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
