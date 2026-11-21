<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\CreateProgramManagementAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $catalog
 * @property 'SOLUTION_PROVIDER'|'DISTRIBUTION'|'DISTRIBUTION_SELLER'|'MANAGED_SERVICES_PROVIDER' $program
 * @property string $displayName
 * @property string $accountId
 * @property string|null $clientToken
 * @property list<Shapes\Tag>|null $tags
 * @property 'RESALE_BILLING_TRANSFER'|'MANAGED_SERVICES'|null $type
 */
class CreateProgramManagementAccountRequest extends Request
{
    /**
     * @param array{
     *     catalog: string,
     *     program: 'SOLUTION_PROVIDER'|'DISTRIBUTION'|'DISTRIBUTION_SELLER'|'MANAGED_SERVICES_PROVIDER',
     *     displayName: string,
     *     accountId: string,
     *     clientToken?: string|null,
     *     tags?: list<Shapes\Tag>|null,
     *     type?: 'RESALE_BILLING_TRANSFER'|'MANAGED_SERVICES'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
