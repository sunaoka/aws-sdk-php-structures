<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\UpdateDomainForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainId
 * @property string $domainArn
 * @property string|null $name
 * @property string $domainEndpointUrl
 * @property list<string>|null $customEndpointUrls
 * @property string $organizationId
 * @property string $ownerAccountId
 * @property list<'IAM'|'IDC'> $identityProviders
 * @property IdentityProviderConfiguration|null $identityProviderConfiguration
 * @property string|null $identityCenterApplicationArn
 * @property string $region
 * @property 'ACTIVE' $status
 * @property string|null $domainAccessRoleArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class OrganizationDomain extends Shape
{
    /**
     * @param array{
     *     domainId: string,
     *     domainArn: string,
     *     name?: string|null,
     *     domainEndpointUrl: string,
     *     customEndpointUrls?: list<string>|null,
     *     organizationId: string,
     *     ownerAccountId: string,
     *     identityProviders: list<'IAM'|'IDC'>,
     *     identityProviderConfiguration?: IdentityProviderConfiguration|null,
     *     identityCenterApplicationArn?: string|null,
     *     region: string,
     *     status: 'ACTIVE',
     *     domainAccessRoleArn?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
