<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateDocumentationVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $documentationVersion
 * @property string $stageName
 * @property string $description
 */
class CreateDocumentationVersionRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     documentationVersion: string,
     *     stageName?: string,
     *     description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
