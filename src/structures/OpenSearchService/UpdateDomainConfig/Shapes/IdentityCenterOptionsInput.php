<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnabledAPIAccess
 * @property string|null $IdentityCenterInstanceARN
 * @property string|null $IdentityCenterInstanceRegion
 * @property 'UserName'|'UserId'|'Email'|null $SubjectKey
 * @property 'GroupName'|'GroupId'|null $RolesKey
 */
class IdentityCenterOptionsInput extends Shape
{
    /**
     * @param array{
     *     EnabledAPIAccess?: bool|null,
     *     IdentityCenterInstanceARN?: string|null,
     *     IdentityCenterInstanceRegion?: string|null,
     *     SubjectKey?: 'UserName'|'UserId'|'Email'|null,
     *     RolesKey?: 'GroupName'|'GroupId'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
