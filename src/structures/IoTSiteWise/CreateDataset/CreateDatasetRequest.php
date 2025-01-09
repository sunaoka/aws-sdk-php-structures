<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetId
 * @property string $datasetName
 * @property string $datasetDescription
 * @property Shapes\DatasetSource $datasetSource
 * @property string $clientToken
 * @property array<string, string> $tags
 */
class CreateDatasetRequest extends Request
{
    /**
     * @param array{
     *     datasetId?: string,
     *     datasetName: string,
     *     datasetDescription?: string,
     *     datasetSource: Shapes\DatasetSource,
     *     clientToken?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
