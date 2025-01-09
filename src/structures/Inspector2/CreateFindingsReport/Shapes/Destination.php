<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateFindingsReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketName
 * @property string $keyPrefix
 * @property string $kmsKeyArn
 */
class Destination extends Shape
{
    /**
     * @param array{
     *     bucketName: string,
     *     keyPrefix?: string,
     *     kmsKeyArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
