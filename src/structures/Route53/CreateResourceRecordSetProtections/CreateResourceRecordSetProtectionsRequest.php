<?php

namespace Sunaoka\Aws\Structures\Route53\CreateResourceRecordSetProtections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HostedZoneId
 * @property list<Shapes\ResourceRecordSetProtectionConfig> $Protections
 */
class CreateResourceRecordSetProtectionsRequest extends Request
{
    /**
     * @param array{
     *     HostedZoneId: string,
     *     Protections: list<Shapes\ResourceRecordSetProtectionConfig>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
