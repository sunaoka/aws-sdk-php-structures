<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetMissionProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $kmsAliasArn
 * @property string $kmsAliasName
 * @property string $kmsKeyArn
 */
class KmsKey extends Shape
{
    /**
     * @param array{
     *     kmsAliasArn?: string,
     *     kmsAliasName?: string,
     *     kmsKeyArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
