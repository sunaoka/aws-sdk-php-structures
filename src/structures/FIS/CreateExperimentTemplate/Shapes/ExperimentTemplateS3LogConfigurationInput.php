<?php

namespace Sunaoka\Aws\Structures\FIS\CreateExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketName
 * @property string|null $prefix
 */
class ExperimentTemplateS3LogConfigurationInput extends Shape
{
    /**
     * @param array{
     *     bucketName: string,
     *     prefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
