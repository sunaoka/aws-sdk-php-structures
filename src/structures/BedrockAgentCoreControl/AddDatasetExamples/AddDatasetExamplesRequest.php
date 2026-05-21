<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\AddDatasetExamples;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetId
 * @property string|null $clientToken
 * @property Shapes\DataSourceType $source
 */
class AddDatasetExamplesRequest extends Request
{
    /**
     * @param array{
     *     datasetId: string,
     *     clientToken?: string|null,
     *     source: Shapes\DataSourceType
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
