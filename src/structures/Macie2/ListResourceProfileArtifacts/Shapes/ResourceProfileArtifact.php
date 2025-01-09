<?php

namespace Sunaoka\Aws\Structures\Macie2\ListResourceProfileArtifacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $classificationResultStatus
 * @property bool $sensitive
 */
class ResourceProfileArtifact extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     classificationResultStatus: string,
     *     sensitive?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
