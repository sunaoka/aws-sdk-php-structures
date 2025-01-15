<?php

namespace Sunaoka\Aws\Structures\PrometheusService\PutAlertManagerDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|resource|\Psr\Http\Message\StreamInterface $data
 * @property string $workspaceId
 */
class PutAlertManagerDefinitionRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     data: string|resource|\Psr\Http\Message\StreamInterface,
     *     workspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
