<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\DeleteProgramManagementAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $catalog
 * @property string $identifier
 * @property string|null $clientToken
 */
class DeleteProgramManagementAccountRequest extends Request
{
    /**
     * @param array{
     *     catalog: string,
     *     identifier: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
