<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DeleteThreatIntelSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property string $ThreatIntelSetId
 */
class DeleteThreatIntelSetRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     ThreatIntelSetId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
