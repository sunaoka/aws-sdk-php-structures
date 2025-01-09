<?php

namespace Sunaoka\Aws\Structures\Iot\AssociateSbomWithPackageVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property string $key
 * @property string $version
 */
class S3Location extends Shape
{
    /**
     * @param array{
     *     bucket?: string,
     *     key?: string,
     *     version?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
