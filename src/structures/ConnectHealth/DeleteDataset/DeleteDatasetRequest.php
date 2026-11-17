<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\DeleteDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $datasetId
 */
class DeleteDatasetRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     datasetId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
