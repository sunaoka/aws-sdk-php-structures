<?php

namespace Sunaoka\Aws\Structures\S3\DeleteObjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property string $VersionId
 * @property string $Code
 * @property string $Message
 */
class Error extends Shape
{
    /**
     * @param array{
     *     Key?: string,
     *     VersionId?: string,
     *     Code?: string,
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
