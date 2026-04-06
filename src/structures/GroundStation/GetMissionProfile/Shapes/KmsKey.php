<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetMissionProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $kmsKeyArn
 * @property string|null $kmsAliasArn
 * @property string|null $kmsAliasName
 */
class KmsKey extends Shape
{
    /**
     * @param array{
     *     kmsKeyArn?: string|null,
     *     kmsAliasArn?: string|null,
     *     kmsAliasName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
