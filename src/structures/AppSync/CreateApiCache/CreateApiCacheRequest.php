<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateApiCache;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property int $ttl
 * @property bool $transitEncryptionEnabled
 * @property bool $atRestEncryptionEnabled
 * @property 'FULL_REQUEST_CACHING'|'PER_RESOLVER_CACHING' $apiCachingBehavior
 * @property 'T2_SMALL'|'T2_MEDIUM'|'R4_LARGE'|'R4_XLARGE'|'R4_2XLARGE'|'R4_4XLARGE'|'R4_8XLARGE'|'SMALL'|'MEDIUM'|'LARGE'|'XLARGE'|'LARGE_2X'|'LARGE_4X'|'LARGE_8X'|'LARGE_12X' $type
 * @property 'ENABLED'|'DISABLED' $healthMetricsConfig
 */
class CreateApiCacheRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     ttl: int,
     *     transitEncryptionEnabled?: bool,
     *     atRestEncryptionEnabled?: bool,
     *     apiCachingBehavior: 'FULL_REQUEST_CACHING'|'PER_RESOLVER_CACHING',
     *     type: 'T2_SMALL'|'T2_MEDIUM'|'R4_LARGE'|'R4_XLARGE'|'R4_2XLARGE'|'R4_4XLARGE'|'R4_8XLARGE'|'SMALL'|'MEDIUM'|'LARGE'|'XLARGE'|'LARGE_2X'|'LARGE_4X'|'LARGE_8X'|'LARGE_12X',
     *     healthMetricsConfig?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
