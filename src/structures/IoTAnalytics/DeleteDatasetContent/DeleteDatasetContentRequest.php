<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DeleteDatasetContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetName
 * @property string|null $versionId
 */
class DeleteDatasetContentRequest extends Request
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
