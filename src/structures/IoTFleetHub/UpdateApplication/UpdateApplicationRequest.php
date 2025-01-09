<?php

namespace Sunaoka\Aws\Structures\IoTFleetHub\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $applicationName
 * @property string $applicationDescription
 * @property string $clientToken
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     applicationName?: string,
     *     applicationDescription?: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
