<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListImportedModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelArn
 * @property string $modelName
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property bool $instructSupported
 * @property string $modelArchitecture
 */
class ImportedModelSummary extends Shape
{
    /**
     * @param array{
     *     modelArn: string,
     *     modelName: string,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     instructSupported?: bool,
     *     modelArchitecture?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
