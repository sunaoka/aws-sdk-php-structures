<?php

namespace Sunaoka\Aws\Structures\Connect\ListInstanceStorageConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Prefix
 * @property int<0, 87600> $RetentionPeriodHours
 * @property EncryptionConfig $EncryptionConfig
 */
class KinesisVideoStreamConfig extends Shape
{
    /**
     * @param array{
     *     Prefix: string,
     *     RetentionPeriodHours: int<0, 87600>,
     *     EncryptionConfig: EncryptionConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
