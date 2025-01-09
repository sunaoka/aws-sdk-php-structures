<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\UpdateElasticsearchDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property bool $InternalUserDatabaseEnabled
 * @property MasterUserOptions $MasterUserOptions
 * @property SAMLOptionsInput $SAMLOptions
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
     *     AnonymousAuthEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
