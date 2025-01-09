<?php

namespace Sunaoka\Aws\Structures\ApiGateway\ImportRestApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $failOnWarnings
 * @property array<string, string> $parameters
 * @property string $body
 */
class ImportRestApiRequest extends Request
{
    /**
     * @param array{
     *     failOnWarnings?: bool,
     *     parameters?: array<string, string>,
     *     body: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
