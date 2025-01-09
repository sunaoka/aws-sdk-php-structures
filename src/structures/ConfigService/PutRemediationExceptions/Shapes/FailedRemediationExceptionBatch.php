<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutRemediationExceptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FailureMessage
 * @property list<RemediationException> $FailedItems
 */
class FailedRemediationExceptionBatch extends Shape
{
    /**
     * @param array{
     *     FailureMessage?: string,
     *     FailedItems?: list<RemediationException>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
