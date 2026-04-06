<?php

namespace Sunaoka\Aws\Structures\ConnectCases\BatchGetCaseRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $errorCode
 * @property string|null $message
 */
class CaseRuleError extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     errorCode: string,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
