<?php

namespace Sunaoka\Aws\Structures\Ecr\ListImageReferrers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $digest
 * @property string $mediaType
 * @property string|null $artifactType
 * @property int $size
 * @property array<string, string>|null $annotations
 * @property 'ACTIVE'|'ARCHIVED'|'ACTIVATING'|null $artifactStatus
 */
class ImageReferrer extends Shape
{
    /**
     * @param array{
     *     digest: string,
     *     mediaType: string,
     *     artifactType?: string|null,
     *     size: int,
     *     annotations?: array<string, string>|null,
     *     artifactStatus?: 'ACTIVE'|'ARCHIVED'|'ACTIVATING'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
