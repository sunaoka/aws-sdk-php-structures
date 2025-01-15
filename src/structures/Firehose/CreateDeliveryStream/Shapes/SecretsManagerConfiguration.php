<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SecretARN
 * @property string|null $RoleARN
 * @property bool $Enabled
 */
class SecretsManagerConfiguration extends Shape
{
    /**
     * @param array{
     *     SecretARN?: string|null,
     *     RoleARN?: string|null,
     *     Enabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
