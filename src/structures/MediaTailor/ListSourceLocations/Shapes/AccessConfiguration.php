<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListSourceLocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3_SIGV4'|'SECRETS_MANAGER_ACCESS_TOKEN'|'AUTODETECT_SIGV4'|null $AccessType
 * @property SecretsManagerAccessTokenConfiguration|null $SecretsManagerAccessTokenConfiguration
 */
class AccessConfiguration extends Shape
{
    /**
     * @param array{
     *     AccessType?: 'S3_SIGV4'|'SECRETS_MANAGER_ACCESS_TOKEN'|'AUTODETECT_SIGV4'|null,
     *     SecretsManagerAccessTokenConfiguration?: SecretsManagerAccessTokenConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
