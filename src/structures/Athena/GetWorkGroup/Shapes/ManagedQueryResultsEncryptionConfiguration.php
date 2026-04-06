<?php

namespace Sunaoka\Aws\Structures\Athena\GetWorkGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KmsKey
 */
class ManagedQueryResultsEncryptionConfiguration extends Shape
{
    /**
     * @param array{KmsKey: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
