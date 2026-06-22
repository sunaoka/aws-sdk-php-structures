<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\GetMicrovmImageBuild;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $imageIdentifier
 * @property string $imageVersion
 * @property string $buildId
 */
class GetMicrovmImageBuildRequest extends Request
{
    /**
     * @param array{
     *     imageIdentifier: string,
     *     imageVersion: string,
     *     buildId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
