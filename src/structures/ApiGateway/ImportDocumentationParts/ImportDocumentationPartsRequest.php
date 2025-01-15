<?php

namespace Sunaoka\Aws\Structures\ApiGateway\ImportDocumentationParts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property 'merge'|'overwrite'|null $mode
 * @property bool|null $failOnWarnings
 * @property string|resource|\Psr\Http\Message\StreamInterface $body
 */
class ImportDocumentationPartsRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     mode?: 'merge'|'overwrite'|null,
     *     failOnWarnings?: bool|null,
     *     body: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
