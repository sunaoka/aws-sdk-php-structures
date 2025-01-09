<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\GetSubject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $subjectId
 */
class GetSubjectRequest extends Request
{
    /**
     * @param array{subjectId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
