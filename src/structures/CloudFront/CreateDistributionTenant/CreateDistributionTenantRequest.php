<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateDistributionTenant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DistributionId
 * @property string $Name
 * @property list<Shapes\DomainItem> $Domains
 * @property Shapes\Tags|null $Tags
 * @property Shapes\Customizations|null $Customizations
 * @property list<Shapes\Parameter>|null $Parameters
 * @property string|null $ConnectionGroupId
 * @property Shapes\ManagedCertificateRequest|null $ManagedCertificateRequest
 * @property bool|null $Enabled
 */
class CreateDistributionTenantRequest extends Request
{
    /**
     * @param array{
     *     DistributionId: string,
     *     Name: string,
     *     Domains: list<Shapes\DomainItem>,
     *     Tags?: Shapes\Tags|null,
     *     Customizations?: Shapes\Customizations|null,
     *     Parameters?: list<Shapes\Parameter>|null,
     *     ConnectionGroupId?: string|null,
     *     ManagedCertificateRequest?: Shapes\ManagedCertificateRequest|null,
     *     Enabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
