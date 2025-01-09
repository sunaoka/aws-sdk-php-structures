<?php

namespace Sunaoka\Aws\Structures\AppConfig\GetEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $EnvironmentId
 */
class GetEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     EnvironmentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
