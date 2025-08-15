<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\StopIngestionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property string $dataSourceId
 * @property string $ingestionJobId
 */
class StopIngestionJobRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     dataSourceId: string,
     *     ingestionJobId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
