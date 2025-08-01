<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property bool|null $InternalUserDatabaseEnabled
 * @property SAMLOptionsOutput|null $SAMLOptions
 * @property JWTOptionsOutput|null $JWTOptions
 * @property IAMFederationOptionsOutput|null $IAMFederationOptions
 * @property \Aws\Api\DateTimeResult|null $AnonymousAuthDisableDate
 * @property bool|null $AnonymousAuthEnabled
 */
class AdvancedSecurityOptions extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     InternalUserDatabaseEnabled?: bool|null,
     *     SAMLOptions?: SAMLOptionsOutput|null,
     *     JWTOptions?: JWTOptionsOutput|null,
     *     IAMFederationOptions?: IAMFederationOptionsOutput|null,
     *     AnonymousAuthDisableDate?: \Aws\Api\DateTimeResult|null,
     *     AnonymousAuthEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
