<?php

namespace Sunaoka\Aws\Structures\CodePipeline\StartPipelineExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionName
 * @property 'COMMIT_ID'|'IMAGE_DIGEST'|'S3_OBJECT_VERSION_ID'|'S3_OBJECT_KEY' $revisionType
 * @property string $revisionValue
 */
class SourceRevisionOverride extends Shape
{
    /**
     * @param array{
     *     actionName: string,
     *     revisionType: 'COMMIT_ID'|'IMAGE_DIGEST'|'S3_OBJECT_VERSION_ID'|'S3_OBJECT_KEY',
     *     revisionValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
