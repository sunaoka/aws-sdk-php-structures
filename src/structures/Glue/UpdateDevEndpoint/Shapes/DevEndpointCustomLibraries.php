<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateDevEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExtraPythonLibsS3Path
 * @property string $ExtraJarsS3Path
 */
class DevEndpointCustomLibraries extends Shape
{
    /**
     * @param array{
     *     ExtraPythonLibsS3Path?: string,
     *     ExtraJarsS3Path?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
