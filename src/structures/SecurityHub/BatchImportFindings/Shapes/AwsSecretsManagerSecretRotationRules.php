<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AutomaticallyAfterDays
 */
class AwsSecretsManagerSecretRotationRules extends Shape
{
    /**
     * @param array{AutomaticallyAfterDays?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
