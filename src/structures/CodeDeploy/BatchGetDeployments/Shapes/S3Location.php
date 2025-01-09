<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property string $key
 * @property 'tar'|'tgz'|'zip'|'YAML'|'JSON' $bundleType
 * @property string $version
 * @property string $eTag
 */
class S3Location extends Shape
{
    /**
     * @param array{
     *     bucket?: string,
     *     key?: string,
     *     bundleType?: 'tar'|'tgz'|'zip'|'YAML'|'JSON',
     *     version?: string,
     *     eTag?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
