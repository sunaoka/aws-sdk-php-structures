<?php

namespace Sunaoka\Aws\Structures\PrometheusService\CreateAlertManagerDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $data
 * @property string $workspaceId
 */
class CreateAlertManagerDefinitionRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     data: string,
     *     workspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
