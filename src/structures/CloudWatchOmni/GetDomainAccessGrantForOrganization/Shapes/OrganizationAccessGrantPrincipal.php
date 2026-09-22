<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetDomainAccessGrantForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IDC_USER'|'IDC_GROUP'|'IAM_USER'|'IAM_ROLE'|'IAM_ROOT' $principalType
 * @property string|null $principalId
 * @property list<AccessGrantPrincipalAttribute>|null $principalAttributes
 */
class OrganizationAccessGrantPrincipal extends Shape
{
    /**
     * @param array{
     *     principalType: 'IDC_USER'|'IDC_GROUP'|'IAM_USER'|'IAM_ROLE'|'IAM_ROOT',
     *     principalId?: string|null,
     *     principalAttributes?: list<AccessGrantPrincipalAttribute>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
