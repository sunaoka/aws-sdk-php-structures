<?php

namespace Sunaoka\Aws\Structures\DataPipeline\CreatePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $uniqueId
 * @property string $description
 * @property list<Shapes\Tag> $tags
 */
class CreatePipelineRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     uniqueId: string,
     *     description?: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
