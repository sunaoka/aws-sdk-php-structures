<?php

namespace Sunaoka\Aws\Structures\MTurk\AcceptQualificationRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QualificationRequestId
 * @property int|null $IntegerValue
 */
class AcceptQualificationRequestRequest extends Request
{
    /**
     * @param array{
     *     QualificationRequestId: string,
     *     IntegerValue?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
