<?php

namespace Sunaoka\Aws\Structures\MTurk\RejectQualificationRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QualificationRequestId
 * @property string $Reason
 */
class RejectQualificationRequestRequest extends Request
{
    /**
     * @param array{
     *     QualificationRequestId: string,
     *     Reason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
