<?php

namespace Sunaoka\Aws\Structures\EMRServerless\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $imageUri
 * @property bool|null $applicationLevelDigestResolution
 */
class ImageConfigurationInput extends Shape
{
    /**
     * @param array{
     *     imageUri?: string|null,
     *     applicationLevelDigestResolution?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
