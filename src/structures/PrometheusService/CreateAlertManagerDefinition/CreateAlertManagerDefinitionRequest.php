<?php

namespace Sunaoka\Aws\Structures\PrometheusService\CreateAlertManagerDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string|resource|\Psr\Http\Message\StreamInterface $data
 * @property string $workspaceId
 */
class CreateAlertManagerDefinitionRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     data: string|resource|\Psr\Http\Message\StreamInterface,
     *     workspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
