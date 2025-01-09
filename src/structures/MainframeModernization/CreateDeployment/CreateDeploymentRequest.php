<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\CreateDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property int<1, max> $applicationVersion
 * @property string $clientToken
 * @property string $environmentId
 */
class CreateDeploymentRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     applicationVersion: int<1, max>,
     *     clientToken?: string,
     *     environmentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
