<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\CreateBlueprint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3Uri
 * @property string|null $version
 */
class S3Object extends Shape
{
    /**
     * @param array{
     *     s3Uri: string,
     *     version?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
