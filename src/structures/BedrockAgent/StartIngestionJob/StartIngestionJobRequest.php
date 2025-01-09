<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\StartIngestionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $dataSourceId
 * @property string $description
 * @property string $knowledgeBaseId
 */
class StartIngestionJobRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     dataSourceId: string,
     *     description?: string,
     *     knowledgeBaseId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
