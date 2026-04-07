<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3Uri
 * @property string|null $s3AccessGrantLocationId
 * @property bool|null $registerS3AccessGrantLocation
 */
class S3PropertiesInput extends Shape
{
    /**
     * @param array{
     *     s3Uri: string,
     *     s3AccessGrantLocationId?: string|null,
     *     registerS3AccessGrantLocation?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
