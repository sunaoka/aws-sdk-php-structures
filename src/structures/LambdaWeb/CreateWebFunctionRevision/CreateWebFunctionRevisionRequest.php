<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\CreateWebFunctionRevision;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $functionName
 * @property string|null $description
 * @property string|null $kmsKeyArn
 * @property Shapes\BuildConfig $buildConfig
 * @property Shapes\ServiceConfig $serviceConfig
 */
class CreateWebFunctionRevisionRequest extends Request
{
    /**
     * @param array{
     *     functionName: string,
     *     description?: string|null,
     *     kmsKeyArn?: string|null,
     *     buildConfig: Shapes\BuildConfig,
     *     serviceConfig: Shapes\ServiceConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
