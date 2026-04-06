<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetModelCustomizationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $usePromptResponse
 * @property InvocationLogSource $invocationLogSource
 * @property RequestMetadataFilters|null $requestMetadataFilters
 */
class InvocationLogsConfig extends Shape
{
    /**
     * @param array{
     *     usePromptResponse?: bool|null,
     *     invocationLogSource: InvocationLogSource,
     *     requestMetadataFilters?: RequestMetadataFilters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
