<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateDatasetVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetId
 * @property string|null $clientToken
 */
class CreateDatasetVersionRequest extends Request
{
    /**
     * @param array{
     *     datasetId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
