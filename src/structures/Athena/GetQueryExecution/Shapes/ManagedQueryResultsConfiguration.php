<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property ManagedQueryResultsEncryptionConfiguration|null $EncryptionConfiguration
 */
class ManagedQueryResultsConfiguration extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     EncryptionConfiguration?: ManagedQueryResultsEncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
