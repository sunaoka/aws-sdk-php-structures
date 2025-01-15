<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\GetDatasetContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetName
 * @property string|null $versionId
 */
class GetDatasetContentRequest extends Request
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
