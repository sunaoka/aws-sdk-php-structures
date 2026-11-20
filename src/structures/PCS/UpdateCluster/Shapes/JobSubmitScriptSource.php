<?php

namespace Sunaoka\Aws\Structures\PCS\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $scriptLocation
 * @property string|null $s3VersionId
 * @property string|null $checksum
 */
class JobSubmitScriptSource extends Shape
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
