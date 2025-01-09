<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetCustomModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $usePromptResponse
 * @property InvocationLogSource $invocationLogSource
 * @property RequestMetadataFilters $requestMetadataFilters
 */
class InvocationLogsConfig extends Shape
{
    /**
     * @param array{
     *     usePromptResponse?: bool,
     *     invocationLogSource: InvocationLogSource,
     *     requestMetadataFilters?: RequestMetadataFilters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
