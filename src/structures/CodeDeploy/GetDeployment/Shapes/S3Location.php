<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $bucket
 * @property string|null $key
 * @property 'tar'|'tgz'|'zip'|'YAML'|'JSON'|null $bundleType
 * @property string|null $version
 * @property string|null $eTag
 */
class S3Location extends Shape
{
    /**
     * @param array{
     *     bucket?: string|null,
     *     key?: string|null,
     *     bundleType?: 'tar'|'tgz'|'zip'|'YAML'|'JSON'|null,
     *     version?: string|null,
     *     eTag?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
