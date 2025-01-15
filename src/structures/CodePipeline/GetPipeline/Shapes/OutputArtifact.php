<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property list<string>|null $files
 */
class OutputArtifact extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     files?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
