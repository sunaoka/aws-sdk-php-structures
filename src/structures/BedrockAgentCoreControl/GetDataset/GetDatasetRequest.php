<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetId
 * @property string|null $datasetVersion
 */
class GetDatasetRequest extends Request
{
    /**
     * @param array{
     *     datasetId: string,
     *     datasetVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
