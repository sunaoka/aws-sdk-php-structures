<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateDevEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ExtraPythonLibsS3Path
 * @property string|null $ExtraJarsS3Path
 */
class DevEndpointCustomLibraries extends Shape
{
    /**
     * @param array{
     *     ExtraPythonLibsS3Path?: string|null,
     *     ExtraJarsS3Path?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
