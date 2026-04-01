<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $projectId
 * @property string $projectPath
 * @property string|null $instanceIdentifier
 */
class GitLabConfiguration extends Shape
{
    /**
     * @param array{
     *     projectId: string,
     *     projectPath: string,
     *     instanceIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
