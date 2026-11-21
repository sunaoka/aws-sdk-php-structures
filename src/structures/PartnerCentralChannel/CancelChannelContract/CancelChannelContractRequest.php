<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\CancelChannelContract;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $catalog
 * @property string $identifier
 * @property string|null $reason
 * @property string|null $clientToken
 */
class CancelChannelContractRequest extends Request
{
    /**
     * @param array{
     *     catalog: string,
     *     identifier: string,
     *     reason?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
