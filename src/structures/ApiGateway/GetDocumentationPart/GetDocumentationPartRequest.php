<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetDocumentationPart;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $documentationPartId
 */
class GetDocumentationPartRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     documentationPartId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
