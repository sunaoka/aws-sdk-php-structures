<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateDistributionTenant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $DistributionId
 * @property list<Shapes\DomainItem>|null $Domains
 * @property Shapes\Customizations|null $Customizations
 * @property list<Shapes\Parameter>|null $Parameters
 * @property string|null $ConnectionGroupId
 * @property string $IfMatch
 * @property Shapes\ManagedCertificateRequest|null $ManagedCertificateRequest
 * @property bool|null $Enabled
 */
class UpdateDistributionTenantRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     DistributionId?: string|null,
     *     Domains?: list<Shapes\DomainItem>|null,
     *     Customizations?: Shapes\Customizations|null,
     *     Parameters?: list<Shapes\Parameter>|null,
     *     ConnectionGroupId?: string|null,
     *     IfMatch: string,
     *     ManagedCertificateRequest?: Shapes\ManagedCertificateRequest|null,
     *     Enabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
