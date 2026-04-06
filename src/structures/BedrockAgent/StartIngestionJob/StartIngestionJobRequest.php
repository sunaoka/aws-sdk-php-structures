<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\StartIngestionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $dataSourceId
 * @property string|null $description
 * @property string $knowledgeBaseId
 */
class StartIngestionJobRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     dataSourceId: string,
     *     description?: string|null,
     *     knowledgeBaseId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
