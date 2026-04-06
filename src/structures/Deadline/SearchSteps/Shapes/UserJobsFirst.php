<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $userIdentityId
 */
class UserJobsFirst extends Shape
{
    /**
     * @param array{userIdentityId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
