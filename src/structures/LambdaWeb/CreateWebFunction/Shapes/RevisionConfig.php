<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\CreateWebFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property string|null $kmsKeyArn
 * @property BuildConfig $buildConfig
 * @property ServiceConfig $serviceConfig
 */
class RevisionConfig extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     kmsKeyArn?: string|null,
     *     buildConfig: BuildConfig,
     *     serviceConfig: ServiceConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
