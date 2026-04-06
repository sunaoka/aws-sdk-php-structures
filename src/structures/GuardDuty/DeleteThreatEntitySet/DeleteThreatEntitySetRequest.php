<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DeleteThreatEntitySet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property string $ThreatEntitySetId
 */
class DeleteThreatEntitySetRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     ThreatEntitySetId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
