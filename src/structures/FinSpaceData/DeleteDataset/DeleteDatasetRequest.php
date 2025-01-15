<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\DeleteDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $datasetId
 */
class DeleteDatasetRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     datasetId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
