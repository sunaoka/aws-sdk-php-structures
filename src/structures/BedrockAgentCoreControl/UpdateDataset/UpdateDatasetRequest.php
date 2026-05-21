<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetId
 * @property string|null $clientToken
 * @property string|null $description
 */
class UpdateDatasetRequest extends Request
{
    /**
     * @param array{
     *     datasetId: string,
     *     clientToken?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
