<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateMissionProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $kmsAliasArn
 * @property string|null $kmsAliasName
 * @property string|null $kmsKeyArn
 */
class KmsKey extends Shape
{
    /**
     * @param array{
     *     kmsAliasArn?: string|null,
     *     kmsAliasName?: string|null,
     *     kmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
