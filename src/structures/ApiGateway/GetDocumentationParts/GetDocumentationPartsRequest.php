<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetDocumentationParts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property 'API'|'AUTHORIZER'|'MODEL'|'RESOURCE'|'METHOD'|'PATH_PARAMETER'|'QUERY_PARAMETER'|'REQUEST_HEADER'|'REQUEST_BODY'|'RESPONSE'|'RESPONSE_HEADER'|'RESPONSE_BODY'|null $type
 * @property string|null $nameQuery
 * @property string|null $path
 * @property string|null $position
 * @property int|null $limit
 * @property 'DOCUMENTED'|'UNDOCUMENTED'|null $locationStatus
 */
class GetDocumentationPartsRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     type?: 'API'|'AUTHORIZER'|'MODEL'|'RESOURCE'|'METHOD'|'PATH_PARAMETER'|'QUERY_PARAMETER'|'REQUEST_HEADER'|'REQUEST_BODY'|'RESPONSE'|'RESPONSE_HEADER'|'RESPONSE_BODY'|null,
     *     nameQuery?: string|null,
     *     path?: string|null,
     *     position?: string|null,
     *     limit?: int|null,
     *     locationStatus?: 'DOCUMENTED'|'UNDOCUMENTED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
