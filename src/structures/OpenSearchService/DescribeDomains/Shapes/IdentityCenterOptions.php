<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnabledAPIAccess
 * @property string $IdentityCenterInstanceARN
 * @property 'UserName'|'UserId'|'Email' $SubjectKey
 * @property 'GroupName'|'GroupId' $RolesKey
 * @property string $IdentityCenterApplicationARN
 * @property string $IdentityStoreId
 */
class IdentityCenterOptions extends Shape
{
    /**
     * @param array{
     *     EnabledAPIAccess?: bool,
     *     IdentityCenterInstanceARN?: string,
     *     SubjectKey?: 'UserName'|'UserId'|'Email',
     *     RolesKey?: 'GroupName'|'GroupId',
     *     IdentityCenterApplicationARN?: string,
     *     IdentityStoreId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
