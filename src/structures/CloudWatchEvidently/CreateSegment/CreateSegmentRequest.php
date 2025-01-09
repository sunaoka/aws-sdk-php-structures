<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\CreateSegment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property string $name
 * @property string $pattern
 * @property array<string, string> $tags
 */
class CreateSegmentRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     name: string,
     *     pattern: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
