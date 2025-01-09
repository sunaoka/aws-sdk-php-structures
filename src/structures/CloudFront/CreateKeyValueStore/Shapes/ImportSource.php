<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateKeyValueStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3' $SourceType
 * @property string $SourceARN
 */
class ImportSource extends Shape
{
    /**
     * @param array{
     *     SourceType: 'S3',
     *     SourceARN: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
