<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SecretARN
 * @property string $RoleARN
 * @property bool $Enabled
 */
class SecretsManagerConfiguration extends Shape
{
    /**
     * @param array{
     *     SecretARN?: string,
     *     RoleARN?: string,
     *     Enabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
