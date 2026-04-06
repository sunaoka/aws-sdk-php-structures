<?php

namespace Sunaoka\Aws\Structures\IoTFleetHub\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string|null $applicationName
 * @property string|null $applicationDescription
 * @property string|null $clientToken
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     applicationName?: string|null,
     *     applicationDescription?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
