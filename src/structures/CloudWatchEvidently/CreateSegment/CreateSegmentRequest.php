<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\CreateSegment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property string $name
 * @property string $pattern
 * @property array<string, string>|null $tags
 */
class CreateSegmentRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     name: string,
     *     pattern: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
