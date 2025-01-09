<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetDocumentationParts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property 'API'|'AUTHORIZER'|'MODEL'|'RESOURCE'|'METHOD'|'PATH_PARAMETER'|'QUERY_PARAMETER'|'REQUEST_HEADER'|'REQUEST_BODY'|'RESPONSE'|'RESPONSE_HEADER'|'RESPONSE_BODY' $type
 * @property string $nameQuery
 * @property string $path
 * @property string $position
 * @property int $limit
 * @property 'DOCUMENTED'|'UNDOCUMENTED' $locationStatus
 */
class GetDocumentationPartsRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     type?: 'API'|'AUTHORIZER'|'MODEL'|'RESOURCE'|'METHOD'|'PATH_PARAMETER'|'QUERY_PARAMETER'|'REQUEST_HEADER'|'REQUEST_BODY'|'RESPONSE'|'RESPONSE_HEADER'|'RESPONSE_BODY',
     *     nameQuery?: string,
     *     path?: string,
     *     position?: string,
     *     limit?: int,
     *     locationStatus?: 'DOCUMENTED'|'UNDOCUMENTED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
