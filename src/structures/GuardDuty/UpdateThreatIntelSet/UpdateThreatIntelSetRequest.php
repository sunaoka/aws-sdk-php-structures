<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateThreatIntelSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property string $ThreatIntelSetId
 * @property string $Name
 * @property string $Location
 * @property bool $Activate
 */
class UpdateThreatIntelSetRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     ThreatIntelSetId: string,
     *     Name?: string,
     *     Location?: string,
     *     Activate?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
