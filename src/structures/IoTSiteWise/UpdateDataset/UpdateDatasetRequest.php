<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetId
 * @property string $datasetName
 * @property string|null $datasetDescription
 * @property Shapes\DatasetSource $datasetSource
 * @property string|null $clientToken
 */
class UpdateDatasetRequest extends Request
{
    /**
     * @param array{
     *     datasetId: string,
     *     datasetName: string,
     *     datasetDescription?: string|null,
     *     datasetSource: Shapes\DatasetSource,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
