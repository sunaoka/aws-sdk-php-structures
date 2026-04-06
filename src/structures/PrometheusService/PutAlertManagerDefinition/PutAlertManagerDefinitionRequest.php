<?php

namespace Sunaoka\Aws\Structures\PrometheusService\PutAlertManagerDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string|resource|\Psr\Http\Message\StreamInterface $data
 * @property string|null $clientToken
 */
class PutAlertManagerDefinitionRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     data: string|resource|\Psr\Http\Message\StreamInterface,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
