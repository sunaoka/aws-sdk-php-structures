<?php

namespace Sunaoka\Aws\Structures\Organizations\InviteOrganizationToTransferResponsibility;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'BILLING' $Type
 * @property Shapes\HandshakeParty $Target
 * @property string|null $Notes
 * @property \Aws\Api\DateTimeResult $StartTimestamp
 * @property string $SourceName
 * @property list<Shapes\Tag>|null $Tags
 */
class InviteOrganizationToTransferResponsibilityRequest extends Request
{
    /**
     * @param array{
     *     Type: 'BILLING',
     *     Target: Shapes\HandshakeParty,
     *     Notes?: string|null,
     *     StartTimestamp: \Aws\Api\DateTimeResult,
     *     SourceName: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
