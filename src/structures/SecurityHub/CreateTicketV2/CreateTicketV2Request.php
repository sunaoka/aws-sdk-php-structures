<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateTicketV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorId
 * @property string $FindingMetadataUid
 * @property string|null $ClientToken
 * @property 'DRYRUN'|null $Mode
 */
class CreateTicketV2Request extends Request
{
    /**
     * @param array{
     *     ConnectorId: string,
     *     FindingMetadataUid: string,
     *     ClientToken?: string|null,
     *     Mode?: 'DRYRUN'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
