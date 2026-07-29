<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetId
 * @property string|null $workspaceName
 * @property string $datasetName
 * @property string|null $datasetDescription
 * @property Shapes\DatasetConfig|null $datasetConfig
 * @property array<string, string>|null $metadata
 * @property Shapes\DatasetSource $datasetSource
 * @property string|null $clientToken
 */
class UpdateDatasetRequest extends Request
{
    /**
     * @param array{
     *     datasetId: string,
     *     workspaceName?: string|null,
     *     datasetName: string,
     *     datasetDescription?: string|null,
     *     datasetConfig?: Shapes\DatasetConfig|null,
     *     metadata?: array<string, string>|null,
     *     datasetSource: Shapes\DatasetSource,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
