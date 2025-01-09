<?php

namespace Sunaoka\Aws\Structures\MTurk\AcceptQualificationRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QualificationRequestId
 * @property int $IntegerValue
 */
class AcceptQualificationRequestRequest extends Request
{
    /**
     * @param array{
     *     QualificationRequestId: string,
     *     IntegerValue?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
