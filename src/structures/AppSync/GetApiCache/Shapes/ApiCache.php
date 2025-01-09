<?php

namespace Sunaoka\Aws\Structures\AppSync\GetApiCache\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ttl
 * @property 'FULL_REQUEST_CACHING'|'PER_RESOLVER_CACHING' $apiCachingBehavior
 * @property bool $transitEncryptionEnabled
 * @property bool $atRestEncryptionEnabled
 * @property 'T2_SMALL'|'T2_MEDIUM'|'R4_LARGE'|'R4_XLARGE'|'R4_2XLARGE'|'R4_4XLARGE'|'R4_8XLARGE'|'SMALL'|'MEDIUM'|'LARGE'|'XLARGE'|'LARGE_2X'|'LARGE_4X'|'LARGE_8X'|'LARGE_12X' $type
 * @property 'AVAILABLE'|'CREATING'|'DELETING'|'MODIFYING'|'FAILED' $status
 * @property 'ENABLED'|'DISABLED' $healthMetricsConfig
 */
class ApiCache extends Shape
{
    /**
     * @param array{
     *     ttl?: int,
     *     apiCachingBehavior?: 'FULL_REQUEST_CACHING'|'PER_RESOLVER_CACHING',
     *     transitEncryptionEnabled?: bool,
     *     atRestEncryptionEnabled?: bool,
     *     type?: 'T2_SMALL'|'T2_MEDIUM'|'R4_LARGE'|'R4_XLARGE'|'R4_2XLARGE'|'R4_4XLARGE'|'R4_8XLARGE'|'SMALL'|'MEDIUM'|'LARGE'|'XLARGE'|'LARGE_2X'|'LARGE_4X'|'LARGE_8X'|'LARGE_12X',
     *     status?: 'AVAILABLE'|'CREATING'|'DELETING'|'MODIFYING'|'FAILED',
     *     healthMetricsConfig?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
