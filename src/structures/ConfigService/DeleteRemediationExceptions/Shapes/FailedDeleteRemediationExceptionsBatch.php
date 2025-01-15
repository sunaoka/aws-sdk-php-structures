<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteRemediationExceptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FailureMessage
 * @property list<RemediationExceptionResourceKey>|null $FailedItems
 */
class FailedDeleteRemediationExceptionsBatch extends Shape
{
    /**
     * @param array{
     *     FailureMessage?: string|null,
     *     FailedItems?: list<RemediationExceptionResourceKey>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
