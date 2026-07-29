<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeleteDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetId
 * @property string|null $workspaceName
 * @property string|null $clientToken
 */
class DeleteDatasetRequest extends Request
{
    /**
     * @param array{
     *     datasetId: string,
     *     workspaceName?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
