<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutRemediationConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FailureMessage
 * @property list<RemediationConfiguration>|null $FailedItems
 */
class FailedRemediationBatch extends Shape
{
    /**
     * @param array{
     *     FailureMessage?: string|null,
     *     FailedItems?: list<RemediationConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
