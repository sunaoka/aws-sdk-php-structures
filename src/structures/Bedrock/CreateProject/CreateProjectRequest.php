<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property list<Shapes\Tag>|null $tags
 * @property Shapes\ProjectDataRetention|null $dataRetention
 */
class CreateProjectRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     tags?: list<Shapes\Tag>|null,
     *     dataRetention?: Shapes\ProjectDataRetention|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
