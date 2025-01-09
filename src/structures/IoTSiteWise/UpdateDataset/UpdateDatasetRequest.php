<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetId
 * @property string $datasetName
 * @property string $datasetDescription
 * @property Shapes\DatasetSource $datasetSource
 * @property string $clientToken
 */
class UpdateDatasetRequest extends Request
{
    /**
     * @param array{
     *     datasetId: string,
     *     datasetName: string,
     *     datasetDescription?: string,
     *     datasetSource: Shapes\DatasetSource,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
