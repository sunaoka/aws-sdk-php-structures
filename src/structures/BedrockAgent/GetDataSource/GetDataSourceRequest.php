<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property string $dataSourceId
 */
class GetDataSourceRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     dataSourceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
