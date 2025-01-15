<?php

namespace Sunaoka\Aws\Structures\S3\DeleteObjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Key
 * @property string|null $VersionId
 * @property string|null $Code
 * @property string|null $Message
 */
class Error extends Shape
{
    /**
     * @param array{
     *     Key?: string|null,
     *     VersionId?: string|null,
     *     Code?: string|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
