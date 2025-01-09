<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteRemediationExceptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FailureMessage
 * @property list<RemediationExceptionResourceKey> $FailedItems
 */
class FailedDeleteRemediationExceptionsBatch extends Shape
{
    /**
     * @param array{
     *     FailureMessage?: string,
     *     FailedItems?: list<RemediationExceptionResourceKey>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
