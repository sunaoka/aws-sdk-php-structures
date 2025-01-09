<?php

namespace Sunaoka\Aws\Structures\ApiGateway\DeleteDocumentationVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $documentationVersion
 */
class DeleteDocumentationVersionRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     documentationVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
