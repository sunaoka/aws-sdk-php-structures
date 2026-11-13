<?php

namespace Sunaoka\Aws\Structures\Route53\DeleteResourceRecordSetProtections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HostedZoneId
 * @property list<Shapes\ResourceRecordSetProtectionKey> $Protections
 */
class DeleteResourceRecordSetProtectionsRequest extends Request
{
    /**
     * @param array{
     *     HostedZoneId: string,
     *     Protections: list<Shapes\ResourceRecordSetProtectionKey>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
