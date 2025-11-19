<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetRestApis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $name
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $createdDate
 * @property string|null $version
 * @property list<string>|null $warnings
 * @property list<string>|null $binaryMediaTypes
 * @property int|null $minimumCompressionSize
 * @property 'HEADER'|'AUTHORIZER'|null $apiKeySource
 * @property EndpointConfiguration|null $endpointConfiguration
 * @property string|null $policy
 * @property array<string, string>|null $tags
 * @property bool|null $disableExecuteApiEndpoint
 * @property string|null $rootResourceId
 * @property 'TLS_1_0'|'TLS_1_2'|'SecurityPolicy_TLS13_1_3_2025_09'|'SecurityPolicy_TLS13_1_3_FIPS_2025_09'|'SecurityPolicy_TLS13_1_2_PFS_PQ_2025_09'|'SecurityPolicy_TLS13_1_2_FIPS_PQ_2025_09'|'SecurityPolicy_TLS13_1_2_PQ_2025_09'|'SecurityPolicy_TLS13_1_2_2021_06'|'SecurityPolicy_TLS13_2025_EDGE'|'SecurityPolicy_TLS12_PFS_2025_EDGE'|'SecurityPolicy_TLS12_2018_EDGE'|null $securityPolicy
 * @property 'BASIC'|'STRICT'|null $endpointAccessMode
 * @property 'UPDATING'|'AVAILABLE'|'PENDING'|'FAILED'|null $apiStatus
 * @property string|null $apiStatusMessage
 */
class RestApi extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     createdDate?: \Aws\Api\DateTimeResult|null,
     *     version?: string|null,
     *     warnings?: list<string>|null,
     *     binaryMediaTypes?: list<string>|null,
     *     minimumCompressionSize?: int|null,
     *     apiKeySource?: 'HEADER'|'AUTHORIZER'|null,
     *     endpointConfiguration?: EndpointConfiguration|null,
     *     policy?: string|null,
     *     tags?: array<string, string>|null,
     *     disableExecuteApiEndpoint?: bool|null,
     *     rootResourceId?: string|null,
     *     securityPolicy?: 'TLS_1_0'|'TLS_1_2'|'SecurityPolicy_TLS13_1_3_2025_09'|'SecurityPolicy_TLS13_1_3_FIPS_2025_09'|'SecurityPolicy_TLS13_1_2_PFS_PQ_2025_09'|'SecurityPolicy_TLS13_1_2_FIPS_PQ_2025_09'|'SecurityPolicy_TLS13_1_2_PQ_2025_09'|'SecurityPolicy_TLS13_1_2_2021_06'|'SecurityPolicy_TLS13_2025_EDGE'|'SecurityPolicy_TLS12_PFS_2025_EDGE'|'SecurityPolicy_TLS12_2018_EDGE'|null,
     *     endpointAccessMode?: 'BASIC'|'STRICT'|null,
     *     apiStatus?: 'UPDATING'|'AVAILABLE'|'PENDING'|'FAILED'|null,
     *     apiStatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
