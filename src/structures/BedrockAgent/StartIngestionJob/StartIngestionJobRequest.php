<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\StartIngestionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property string $dataSourceId
 * @property string|null $clientToken
 * @property string|null $description
 */
class StartIngestionJobRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     dataSourceId: string,
     *     clientToken?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
