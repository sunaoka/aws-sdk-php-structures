<?php

namespace Sunaoka\Aws\Structures\Mobile\UpdateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $contents
 * @property string $projectId
 */
class UpdateProjectRequest extends Request
{
    /**
     * @param array{
     *     contents?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     projectId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
