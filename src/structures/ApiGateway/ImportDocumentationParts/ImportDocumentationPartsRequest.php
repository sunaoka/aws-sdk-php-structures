<?php

namespace Sunaoka\Aws\Structures\ApiGateway\ImportDocumentationParts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property 'merge'|'overwrite' $mode
 * @property bool $failOnWarnings
 * @property string|resource|\Psr\Http\Message\StreamInterface $body
 */
class ImportDocumentationPartsRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     mode?: 'merge'|'overwrite',
     *     failOnWarnings?: bool,
     *     body: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
