<?php

namespace Sunaoka\Aws\Structures\DataPipeline\DescribePipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $pipelineId
 * @property string $name
 * @property list<Field> $fields
 * @property string $description
 * @property list<Tag> $tags
 */
class PipelineDescription extends Shape
{
    /**
     * @param array{
     *     pipelineId: string,
     *     name: string,
     *     fields: list<Field>,
     *     description?: string,
     *     tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
