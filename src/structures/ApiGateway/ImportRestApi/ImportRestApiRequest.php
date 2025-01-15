<?php

namespace Sunaoka\Aws\Structures\ApiGateway\ImportRestApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $failOnWarnings
 * @property array<string, string>|null $parameters
 * @property string|resource|\Psr\Http\Message\StreamInterface $body
 */
class ImportRestApiRequest extends Request
{
    /**
     * @param array{
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
