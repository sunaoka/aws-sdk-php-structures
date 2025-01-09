<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetIngestionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dataSourceId
 * @property string $ingestionJobId
 * @property string $knowledgeBaseId
 */
class GetIngestionJobRequest extends Request
{
    /**
     * @param array{
     *     dataSourceId: string,
     *     ingestionJobId: string,
     *     knowledgeBaseId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
