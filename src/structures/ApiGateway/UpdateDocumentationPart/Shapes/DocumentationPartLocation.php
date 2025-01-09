<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateDocumentationPart\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'API'|'AUTHORIZER'|'MODEL'|'RESOURCE'|'METHOD'|'PATH_PARAMETER'|'QUERY_PARAMETER'|'REQUEST_HEADER'|'REQUEST_BODY'|'RESPONSE'|'RESPONSE_HEADER'|'RESPONSE_BODY' $type
 * @property string $path
 * @property string $method
 * @property string $statusCode
 * @property string $name
 */
class DocumentationPartLocation extends Shape
{
    /**
     * @param array{
     *     type: 'API'|'AUTHORIZER'|'MODEL'|'RESOURCE'|'METHOD'|'PATH_PARAMETER'|'QUERY_PARAMETER'|'REQUEST_HEADER'|'REQUEST_BODY'|'RESPONSE'|'RESPONSE_HEADER'|'RESPONSE_BODY',
     *     path?: string,
     *     method?: string,
     *     statusCode?: string,
     *     name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
