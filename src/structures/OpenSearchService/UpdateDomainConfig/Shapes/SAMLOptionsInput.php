<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property SAMLIdp|null $Idp
 * @property string|null $MasterUserName
 * @property string|null $MasterBackendRole
 * @property string|null $SubjectKey
 * @property string|null $RolesKey
 * @property int|null $SessionTimeoutMinutes
 */
class SAMLOptionsInput extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     Idp?: SAMLIdp|null,
     *     MasterUserName?: string|null,
     *     MasterBackendRole?: string|null,
     *     SubjectKey?: string|null,
     *     RolesKey?: string|null,
     *     SessionTimeoutMinutes?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
