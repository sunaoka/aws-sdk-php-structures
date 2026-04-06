<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\UpdateProgramManagementAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $catalog
 * @property string $identifier
 * @property string|null $revision
 * @property string|null $displayName
 */
class UpdateProgramManagementAccountRequest extends Request
{
    /**
     * @param array{
     *     catalog: string,
     *     identifier: string,
     *     revision?: string|null,
     *     displayName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
