<?php

namespace Sunaoka\Aws\Structures\EMRServerless\StartJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $policy
 * @property list<string>|null $policyArns
 */
class JobRunExecutionIamPolicy extends Shape
{
    /**
     * @param array{
     *     policy?: string|null,
     *     policyArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
