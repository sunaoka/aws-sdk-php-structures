<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateTicketV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorId
 * @property string $FindingMetadataUid
 * @property string|null $ClientToken
 */
class CreateTicketV2Request extends Request
{
    /**
     * @param array{
     *     ConnectorId: string,
     *     FindingMetadataUid: string,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
