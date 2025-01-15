<?php

namespace Sunaoka\Aws\Structures\DataPipeline\CreatePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $uniqueId
 * @property string|null $description
 * @property list<Shapes\Tag>|null $tags
 */
class CreatePipelineRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     uniqueId: string,
     *     description?: string|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
