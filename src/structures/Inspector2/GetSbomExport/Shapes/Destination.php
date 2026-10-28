<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetSbomExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketName
 * @property string|null $keyPrefix
 * @property string $kmsKeyArn
 * @property string|null $expectedBucketOwner
 */
class Destination extends Shape
{
    /**
     * @param array{
     *     bucketName: string,
     *     keyPrefix?: string|null,
     *     kmsKeyArn: string,
     *     expectedBucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
