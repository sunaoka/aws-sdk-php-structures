<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnabledAPIAccess
 * @property string|null $IdentityCenterInstanceARN
 * @property 'UserName'|'UserId'|'Email'|null $SubjectKey
 * @property 'GroupName'|'GroupId'|null $RolesKey
 * @property string|null $IdentityCenterApplicationARN
 * @property string|null $IdentityStoreId
 */
class IdentityCenterOptions extends Shape
{
    /**
     * @param array{
     *     EnabledAPIAccess?: bool|null,
     *     IdentityCenterInstanceARN?: string|null,
     *     SubjectKey?: 'UserName'|'UserId'|'Email'|null,
     *     RolesKey?: 'GroupName'|'GroupId'|null,
     *     IdentityCenterApplicationARN?: string|null,
     *     IdentityStoreId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
