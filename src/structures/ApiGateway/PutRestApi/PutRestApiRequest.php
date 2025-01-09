<?php

namespace Sunaoka\Aws\Structures\ApiGateway\PutRestApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property 'merge'|'overwrite' $mode
 * @property bool $failOnWarnings
 * @property array<string, string> $parameters
 * @property string $body
 */
class PutRestApiRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     mode?: 'merge'|'overwrite',
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
