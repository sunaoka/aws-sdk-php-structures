<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateApiCache;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property int $ttl
 * @property bool|null $transitEncryptionEnabled
 * @property bool|null $atRestEncryptionEnabled
 * @property 'FULL_REQUEST_CACHING'|'PER_RESOLVER_CACHING'|'OPERATION_LEVEL_CACHING' $apiCachingBehavior
 * @property 'T2_SMALL'|'T2_MEDIUM'|'R4_LARGE'|'R4_XLARGE'|'R4_2XLARGE'|'R4_4XLARGE'|'R4_8XLARGE'|'SMALL'|'MEDIUM'|'LARGE'|'XLARGE'|'LARGE_2X'|'LARGE_4X'|'LARGE_8X'|'LARGE_12X' $type
 * @property 'ENABLED'|'DISABLED'|null $healthMetricsConfig
 */
class CreateApiCacheRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     ttl: int,
     *     transitEncryptionEnabled?: bool|null,
     *     atRestEncryptionEnabled?: bool|null,
     *     apiCachingBehavior: 'FULL_REQUEST_CACHING'|'PER_RESOLVER_CACHING'|'OPERATION_LEVEL_CACHING',
     *     type: 'T2_SMALL'|'T2_MEDIUM'|'R4_LARGE'|'R4_XLARGE'|'R4_2XLARGE'|'R4_4XLARGE'|'R4_8XLARGE'|'SMALL'|'MEDIUM'|'LARGE'|'XLARGE'|'LARGE_2X'|'LARGE_4X'|'LARGE_8X'|'LARGE_12X',
     *     healthMetricsConfig?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
