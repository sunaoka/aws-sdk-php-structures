<?php

namespace Sunaoka\Aws\Structures\ApiGateway\ImportApiKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $body
 * @property 'csv' $format
 * @property bool $failOnWarnings
 */
class ImportApiKeysRequest extends Request
{
    /**
     * @param array{
     *     body: string,
     *     format: 'csv',
     *     failOnWarnings?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
