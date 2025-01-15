<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateDocumentationPart\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'API'|'AUTHORIZER'|'MODEL'|'RESOURCE'|'METHOD'|'PATH_PARAMETER'|'QUERY_PARAMETER'|'REQUEST_HEADER'|'REQUEST_BODY'|'RESPONSE'|'RESPONSE_HEADER'|'RESPONSE_BODY' $type
 * @property string|null $path
 * @property string|null $method
 * @property string|null $statusCode
 * @property string|null $name
 */
class DocumentationPartLocation extends Shape
{
    /**
     * @param array{
     *     type: 'API'|'AUTHORIZER'|'MODEL'|'RESOURCE'|'METHOD'|'PATH_PARAMETER'|'QUERY_PARAMETER'|'REQUEST_HEADER'|'REQUEST_BODY'|'RESPONSE'|'RESPONSE_HEADER'|'RESPONSE_BODY',
     *     path?: string|null,
     *     method?: string|null,
     *     statusCode?: string|null,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
