<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainId
 * @property string $domainArn
 * @property string|null $name
 * @property list<'IAM'|'IDC'> $identityProviders
 * @property IdentityProviderConfiguration|null $identityProviderConfiguration
 * @property string $domainEndpointUrl
 * @property list<string>|null $customEndpointUrls
 * @property string|null $identityCenterApplicationArn
 * @property string $region
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'ACTIVE' $status
 */
class Domain extends Shape
{
    /**
     * @param array{
     *     domainId: string,
     *     domainArn: string,
     *     name?: string|null,
     *     identityProviders: list<'IAM'|'IDC'>,
     *     identityProviderConfiguration?: IdentityProviderConfiguration|null,
     *     domainEndpointUrl: string,
     *     customEndpointUrls?: list<string>|null,
     *     identityCenterApplicationArn?: string|null,
     *     region: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     status: 'ACTIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
