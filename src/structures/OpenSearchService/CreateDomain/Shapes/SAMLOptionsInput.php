<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property SAMLIdp $Idp
 * @property string $MasterUserName
 * @property string $MasterBackendRole
 * @property string $SubjectKey
 * @property string $RolesKey
 * @property int $SessionTimeoutMinutes
 */
class SAMLOptionsInput extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     Idp?: SAMLIdp,
     *     MasterUserName?: string,
     *     MasterBackendRole?: string,
     *     SubjectKey?: string,
     *     RolesKey?: string,
     *     SessionTimeoutMinutes?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
