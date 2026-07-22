<?php

namespace Sunaoka\Aws\Structures\PCS\RegisterComputeNodeGroupInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $scriptLocation
 * @property string|null $s3VersionId
 * @property string|null $checksum
 */
class ScriptSource extends Shape
{
    /**
     * @param array{
     *     scriptLocation: string,
     *     s3VersionId?: string|null,
     *     checksum?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
