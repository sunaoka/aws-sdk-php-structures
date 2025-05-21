<?php

namespace Sunaoka\Aws\Structures\ConnectCases\BatchGetCaseRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $errorCode
 * @property string $id
 * @property string|null $message
 */
class CaseRuleError extends Shape
{
    /**
     * @param array{
     *     errorCode: string,
     *     id: string,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
