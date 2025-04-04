<?php

namespace Sunaoka\Aws\Structures\HealthLake\DescribeFHIRImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 * @property string $KmsKeyId
 */
class S3Configuration extends Shape
{
    /**
     * @param array{
     *     S3Uri: string,
     *     KmsKeyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
