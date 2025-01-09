<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateInstanceStorageConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Prefix
 * @property int $RetentionPeriodHours
 * @property EncryptionConfig $EncryptionConfig
 */
class KinesisVideoStreamConfig extends Shape
{
    /**
     * @param array{
     *     Prefix: string,
     *     RetentionPeriodHours: int,
     *     EncryptionConfig: EncryptionConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
