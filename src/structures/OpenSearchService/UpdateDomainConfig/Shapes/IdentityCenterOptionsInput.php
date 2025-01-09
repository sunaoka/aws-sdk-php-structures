<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnabledAPIAccess
 * @property string $IdentityCenterInstanceARN
 * @property 'UserName'|'UserId'|'Email' $SubjectKey
 * @property 'GroupName'|'GroupId' $RolesKey
 */
class IdentityCenterOptionsInput extends Shape
{
    /**
     * @param array{
     *     EnabledAPIAccess?: bool,
     *     IdentityCenterInstanceARN?: string,
     *     SubjectKey?: 'UserName'|'UserId'|'Email',
     *     RolesKey?: 'GroupName'|'GroupId'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
