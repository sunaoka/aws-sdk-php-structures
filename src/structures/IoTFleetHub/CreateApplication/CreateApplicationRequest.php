<?php

namespace Sunaoka\Aws\Structures\IoTFleetHub\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationName
 * @property string|null $applicationDescription
 * @property string|null $clientToken
 * @property string $roleArn
 * @property array<string, string>|null $tags
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     applicationName: string,
     *     applicationDescription?: string|null,
     *     clientToken?: string|null,
     *     roleArn: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
