<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutRemediationConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FailureMessage
 * @property list<RemediationConfiguration> $FailedItems
 */
class FailedRemediationBatch extends Shape
{
    /**
     * @param array{
     *     FailureMessage?: string,
     *     FailedItems?: list<RemediationConfiguration>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
