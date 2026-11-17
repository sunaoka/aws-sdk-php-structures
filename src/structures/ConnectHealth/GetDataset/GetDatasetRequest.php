<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\GetDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $datasetId
 */
class GetDatasetRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     datasetId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
