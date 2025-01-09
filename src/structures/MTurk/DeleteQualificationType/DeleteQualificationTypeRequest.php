<?php

namespace Sunaoka\Aws\Structures\MTurk\DeleteQualificationType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QualificationTypeId
 */
class DeleteQualificationTypeRequest extends Request
{
    /**
     * @param array{QualificationTypeId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
