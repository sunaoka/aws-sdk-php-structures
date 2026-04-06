<?php

namespace Sunaoka\Aws\Structures\CodeStar\CreateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $description
 * @property string $type
 * @property string $owner
 * @property bool $privateRepository
 * @property bool $issuesEnabled
 * @property string $token
 */
class GitHubCodeDestination extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     type: string,
     *     owner: string,
     *     privateRepository: bool,
     *     issuesEnabled: bool,
     *     token: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
