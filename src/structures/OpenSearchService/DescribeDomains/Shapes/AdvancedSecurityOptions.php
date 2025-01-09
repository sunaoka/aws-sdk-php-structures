<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property bool $InternalUserDatabaseEnabled
 * @property SAMLOptionsOutput $SAMLOptions
 * @property JWTOptionsOutput $JWTOptions
 * @property \Aws\Api\DateTimeResult $AnonymousAuthDisableDate
 * @property bool $AnonymousAuthEnabled
 */
class AdvancedSecurityOptions extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     InternalUserDatabaseEnabled?: bool,
     *     SAMLOptions?: SAMLOptionsOutput,
     *     JWTOptions?: JWTOptionsOutput,
     *     AnonymousAuthDisableDate?: \Aws\Api\DateTimeResult,
     *     AnonymousAuthEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
