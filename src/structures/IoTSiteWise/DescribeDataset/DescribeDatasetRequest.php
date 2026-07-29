<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetId
 * @property string|null $workspaceName
 * @property string|null $datasetVersion
 */
class DescribeDatasetRequest extends Request
{
    /**
     * @param array{
     *     datasetId: string,
     *     workspaceName?: string|null,
     *     datasetVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
