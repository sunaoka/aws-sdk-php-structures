<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DeleteTrustedEntitySet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property string $TrustedEntitySetId
 */
class DeleteTrustedEntitySetRequest extends Request
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
