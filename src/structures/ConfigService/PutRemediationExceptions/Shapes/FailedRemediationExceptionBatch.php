<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutRemediationExceptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FailureMessage
 * @property list<RemediationException>|null $FailedItems
 */
class FailedRemediationExceptionBatch extends Shape
{
    /**
     * @param array{
     *     FailureMessage?: string|null,
     *     FailedItems?: list<RemediationException>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
