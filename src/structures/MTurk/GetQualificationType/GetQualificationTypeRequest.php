<?php

namespace Sunaoka\Aws\Structures\MTurk\GetQualificationType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QualificationTypeId
 */
class GetQualificationTypeRequest extends Request
{
    /**
     * @param array{QualificationTypeId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
