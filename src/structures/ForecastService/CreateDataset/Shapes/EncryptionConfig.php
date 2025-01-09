<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleArn
 * @property string $KMSKeyArn
 */
class EncryptionConfig extends Shape
{
    /**
     * @param array{
     *     RoleArn: string,
     *     KMSKeyArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
