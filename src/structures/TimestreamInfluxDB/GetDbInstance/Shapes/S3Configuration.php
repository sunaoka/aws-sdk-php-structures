<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\GetDbInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketName
 * @property bool $enabled
 */
class S3Configuration extends Shape
{
    /**
     * @param array{
     *     bucketName: string,
     *     enabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
