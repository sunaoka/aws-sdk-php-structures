<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateApiCache\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ttl
 * @property 'FULL_REQUEST_CACHING'|'PER_RESOLVER_CACHING'|null $apiCachingBehavior
 * @property bool|null $transitEncryptionEnabled
 * @property bool|null $atRestEncryptionEnabled
 * @property 'T2_SMALL'|'T2_MEDIUM'|'R4_LARGE'|'R4_XLARGE'|'R4_2XLARGE'|'R4_4XLARGE'|'R4_8XLARGE'|'SMALL'|'MEDIUM'|'LARGE'|'XLARGE'|'LARGE_2X'|'LARGE_4X'|'LARGE_8X'|'LARGE_12X'|null $type
 * @property 'AVAILABLE'|'CREATING'|'DELETING'|'MODIFYING'|'FAILED'|null $status
 * @property 'ENABLED'|'DISABLED'|null $healthMetricsConfig
 */
class ApiCache extends Shape
{
    /**
     * @param array{
     *     ttl?: int|null,
     *     apiCachingBehavior?: 'FULL_REQUEST_CACHING'|'PER_RESOLVER_CACHING'|null,
     *     transitEncryptionEnabled?: bool|null,
     *     atRestEncryptionEnabled?: bool|null,
     *     type?: 'T2_SMALL'|'T2_MEDIUM'|'R4_LARGE'|'R4_XLARGE'|'R4_2XLARGE'|'R4_4XLARGE'|'R4_8XLARGE'|'SMALL'|'MEDIUM'|'LARGE'|'XLARGE'|'LARGE_2X'|'LARGE_4X'|'LARGE_8X'|'LARGE_12X'|null,
     *     status?: 'AVAILABLE'|'CREATING'|'DELETING'|'MODIFYING'|'FAILED'|null,
     *     healthMetricsConfig?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
