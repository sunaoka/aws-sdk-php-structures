<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $s3AccessGrantLocationId
 * @property string $s3Uri
 */
class S3PropertiesInput extends Shape
{
    /**
     * @param array{
     *     s3AccessGrantLocationId?: string|null,
     *     s3Uri: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
