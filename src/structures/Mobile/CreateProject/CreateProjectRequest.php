<?php

namespace Sunaoka\Aws\Structures\Mobile\CreateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $name
 * @property string|null $region
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $contents
 * @property string|null $snapshotId
 */
class CreateProjectRequest extends Request
{
    /**
     * @param array{
     *     name?: string|null,
     *     region?: string|null,
     *     contents?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     snapshotId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
