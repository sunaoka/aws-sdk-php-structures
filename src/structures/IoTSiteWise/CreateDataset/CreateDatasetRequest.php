<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $datasetId
 * @property string $datasetName
 * @property string|null $datasetDescription
 * @property 'SESSION'|'CURATED'|'EXTERNAL'|null $datasetType
 * @property Shapes\DatasetConfig|null $datasetConfig
 * @property string|null $workspaceName
 * @property array<string, string>|null $metadata
 * @property Shapes\DatasetSource $datasetSource
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateDatasetRequest extends Request
{
    /**
     * @param array{
     *     datasetId?: string|null,
     *     datasetName: string,
     *     datasetDescription?: string|null,
     *     datasetType?: 'SESSION'|'CURATED'|'EXTERNAL'|null,
     *     datasetConfig?: Shapes\DatasetConfig|null,
     *     workspaceName?: string|null,
     *     metadata?: array<string, string>|null,
     *     datasetSource: Shapes\DatasetSource,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
