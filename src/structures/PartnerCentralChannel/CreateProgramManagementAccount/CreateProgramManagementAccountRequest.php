<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\CreateProgramManagementAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $catalog
 * @property 'SOLUTION_PROVIDER'|'DISTRIBUTION'|'DISTRIBUTION_SELLER' $program
 * @property string $displayName
 * @property string $accountId
 * @property string|null $clientToken
 * @property list<Shapes\Tag>|null $tags
 */
class CreateProgramManagementAccountRequest extends Request
{
    /**
     * @param array{
     *     catalog: string,
     *     program: 'SOLUTION_PROVIDER'|'DISTRIBUTION'|'DISTRIBUTION_SELLER',
     *     displayName: string,
     *     accountId: string,
     *     clientToken?: string|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
