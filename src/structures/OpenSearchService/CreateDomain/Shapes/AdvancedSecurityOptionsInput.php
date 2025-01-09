<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property bool $InternalUserDatabaseEnabled
 * @property MasterUserOptions $MasterUserOptions
 * @property SAMLOptionsInput $SAMLOptions
 * @property JWTOptionsInput $JWTOptions
 * @property bool $AnonymousAuthEnabled
 */
class AdvancedSecurityOptionsInput extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     InternalUserDatabaseEnabled?: bool,
     *     MasterUserOptions?: MasterUserOptions,
     *     SAMLOptions?: SAMLOptionsInput,
     *     JWTOptions?: JWTOptionsInput,
     *     AnonymousAuthEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
