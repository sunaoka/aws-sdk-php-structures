<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateNotebook\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $connectionId
 * @property string $repository
 * @property string $branch
 * @property string $commitHash
 * @property string|null $fileName
 * @property \Aws\Api\DateTimeResult|null $committedAt
 * @property string|null $commitMessage
 */
class GitMetadata extends Shape
{
    /**
     * @param array{
     *     connectionId: string,
     *     repository: string,
     *     branch: string,
     *     commitHash: string,
     *     fileName?: string|null,
     *     committedAt?: \Aws\Api\DateTimeResult|null,
     *     commitMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
