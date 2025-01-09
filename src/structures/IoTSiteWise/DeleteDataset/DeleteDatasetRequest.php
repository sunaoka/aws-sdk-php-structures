<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeleteDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetId
 * @property string $clientToken
 */
class DeleteDatasetRequest extends Request
{
    /**
     * @param array{
     *     datasetId: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
