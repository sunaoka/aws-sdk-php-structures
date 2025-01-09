<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dataSourceId
 * @property string $knowledgeBaseId
 */
class GetDataSourceRequest extends Request
{
    /**
     * @param array{
     *     dataSourceId: string,
     *     knowledgeBaseId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
