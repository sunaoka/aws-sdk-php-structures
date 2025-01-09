<?php

namespace Sunaoka\Aws\Structures\IoTFleetHub\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationName
 * @property string $applicationDescription
 * @property string $clientToken
 * @property string $roleArn
 * @property array<string, string> $tags
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     applicationName: string,
     *     applicationDescription?: string,
     *     clientToken?: string,
     *     roleArn: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
