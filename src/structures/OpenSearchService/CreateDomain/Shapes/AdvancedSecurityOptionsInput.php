<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property bool|null $InternalUserDatabaseEnabled
 * @property MasterUserOptions|null $MasterUserOptions
 * @property SAMLOptionsInput|null $SAMLOptions
 * @property JWTOptionsInput|null $JWTOptions
 * @property bool|null $AnonymousAuthEnabled
 */
class AdvancedSecurityOptionsInput extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     InternalUserDatabaseEnabled?: bool|null,
     *     MasterUserOptions?: MasterUserOptions|null,
     *     SAMLOptions?: SAMLOptionsInput|null,
     *     JWTOptions?: JWTOptionsInput|null,
     *     AnonymousAuthEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
