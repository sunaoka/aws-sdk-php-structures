<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\UpdateOtaTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property string|null $Description
 * @property string|null $TaskConfigurationId
 */
class UpdateOtaTaskRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     Description?: string|null,
     *     TaskConfigurationId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
