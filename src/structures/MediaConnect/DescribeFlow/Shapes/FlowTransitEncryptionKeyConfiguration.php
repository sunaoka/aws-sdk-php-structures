<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SecretsManagerEncryptionKeyConfiguration|null $SecretsManager
 * @property AutomaticEncryptionKeyConfiguration|null $Automatic
 */
class FlowTransitEncryptionKeyConfiguration extends Shape
{
    /**
     * @param array{
     *     SecretsManager?: SecretsManagerEncryptionKeyConfiguration|null,
     *     Automatic?: AutomaticEncryptionKeyConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
