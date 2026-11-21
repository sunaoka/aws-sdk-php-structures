<?php

namespace Sunaoka\Aws\Structures\Route53\UpdateHostedZoneTier;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HostedZoneId
 * @property 'STANDARD'|'ADVANCED' $HostedZoneTier
 * @property bool|null $DryRun
 */
class UpdateHostedZoneTierRequest extends Request
{
    /**
     * @param array{
     *     HostedZoneId: string,
     *     HostedZoneTier: 'STANDARD'|'ADVANCED',
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
