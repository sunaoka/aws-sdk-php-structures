<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\CreateDatasetContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetName
 * @property string|null $versionId
 */
class CreateDatasetContentRequest extends Request
{
    /**
     * @param array{
     *     datasetName: string,
     *     versionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
