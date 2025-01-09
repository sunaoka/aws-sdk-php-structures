<?php

namespace Sunaoka\Aws\Structures\PrometheusService\PutAlertManagerDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $data
 * @property string $workspaceId
 */
class PutAlertManagerDefinitionRequest extends Request
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
