<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $AutomaticallyAfterDays
 */
class AwsSecretsManagerSecretRotationRules extends Shape
{
    /**
     * @param array{AutomaticallyAfterDays?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
