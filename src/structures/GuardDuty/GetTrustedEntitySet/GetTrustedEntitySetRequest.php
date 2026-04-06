<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetTrustedEntitySet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property string $TrustedEntitySetId
 */
class GetTrustedEntitySetRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     TrustedEntitySetId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
