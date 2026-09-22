<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\ListAccessGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IDC_USER'|'IDC_GROUP'|'IAM_USER'|'IAM_ROLE'|'IAM_ROOT'|'ACCESS_PROFILE'|'ALERT'|'AGENT' $principalType
 * @property string|null $principalId
 * @property list<AccessGrantPrincipalAttribute>|null $principalAttributes
 */
class AccessGrantPrincipal extends Shape
{
    /**
     * @param array{
     *     principalType: 'IDC_USER'|'IDC_GROUP'|'IAM_USER'|'IAM_ROLE'|'IAM_ROOT'|'ACCESS_PROFILE'|'ALERT'|'AGENT',
     *     principalId?: string|null,
     *     principalAttributes?: list<AccessGrantPrincipalAttribute>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
