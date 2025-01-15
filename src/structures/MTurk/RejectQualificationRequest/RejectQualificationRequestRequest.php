<?php

namespace Sunaoka\Aws\Structures\MTurk\RejectQualificationRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QualificationRequestId
 * @property string|null $Reason
 */
class RejectQualificationRequestRequest extends Request
{
    /**
     * @param array{
     *     QualificationRequestId: string,
     *     Reason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
