<?php

namespace Sunaoka\Aws\Structures\ApiGateway\PutRestApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property 'merge'|'overwrite'|null $mode
 * @property bool|null $failOnWarnings
 * @property array<string, string>|null $parameters
 * @property string|resource|\Psr\Http\Message\StreamInterface $body
 */
class PutRestApiRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     mode?: 'merge'|'overwrite'|null,
     *     failOnWarnings?: bool|null,
     *     parameters?: array<string, string>|null,
     *     body: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
