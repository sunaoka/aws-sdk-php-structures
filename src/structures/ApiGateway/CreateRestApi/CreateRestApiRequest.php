<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateRestApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property string|null $version
 * @property string|null $cloneFrom
 * @property list<string>|null $binaryMediaTypes
 * @property int|null $minimumCompressionSize
 * @property 'HEADER'|'AUTHORIZER'|null $apiKeySource
 * @property Shapes\EndpointConfiguration|null $endpointConfiguration
 * @property string|null $policy
 * @property array<string, string>|null $tags
 * @property bool|null $disableExecuteApiEndpoint
 * @property 'TLS_1_0'|'TLS_1_2'|'SecurityPolicy_TLS13_1_3_2025_09'|'SecurityPolicy_TLS13_1_3_FIPS_2025_09'|'SecurityPolicy_TLS13_1_2_PFS_PQ_2025_09'|'SecurityPolicy_TLS13_1_2_FIPS_PQ_2025_09'|'SecurityPolicy_TLS13_1_2_PQ_2025_09'|'SecurityPolicy_TLS13_1_2_2021_06'|'SecurityPolicy_TLS13_2025_EDGE'|'SecurityPolicy_TLS12_PFS_2025_EDGE'|'SecurityPolicy_TLS12_2018_EDGE'|null $securityPolicy
 * @property 'BASIC'|'STRICT'|null $endpointAccessMode
 */
class CreateRestApiRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     version?: string|null,
     *     cloneFrom?: string|null,
     *     binaryMediaTypes?: list<string>|null,
     *     minimumCompressionSize?: int|null,
     *     apiKeySource?: 'HEADER'|'AUTHORIZER'|null,
     *     endpointConfiguration?: Shapes\EndpointConfiguration|null,
     *     policy?: string|null,
     *     tags?: array<string, string>|null,
     *     disableExecuteApiEndpoint?: bool|null,
     *     securityPolicy?: 'TLS_1_0'|'TLS_1_2'|'SecurityPolicy_TLS13_1_3_2025_09'|'SecurityPolicy_TLS13_1_3_FIPS_2025_09'|'SecurityPolicy_TLS13_1_2_PFS_PQ_2025_09'|'SecurityPolicy_TLS13_1_2_FIPS_PQ_2025_09'|'SecurityPolicy_TLS13_1_2_PQ_2025_09'|'SecurityPolicy_TLS13_1_2_2021_06'|'SecurityPolicy_TLS13_2025_EDGE'|'SecurityPolicy_TLS12_PFS_2025_EDGE'|'SecurityPolicy_TLS12_2018_EDGE'|null,
     *     endpointAccessMode?: 'BASIC'|'STRICT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
