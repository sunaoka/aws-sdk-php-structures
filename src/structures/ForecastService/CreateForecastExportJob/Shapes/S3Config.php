<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateForecastExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Path
 * @property string $RoleArn
 * @property string|null $KMSKeyArn
 */
class S3Config extends Shape
{
    /**
     * @param array{
     *     Path: string,
     *     RoleArn: string,
     *     KMSKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
