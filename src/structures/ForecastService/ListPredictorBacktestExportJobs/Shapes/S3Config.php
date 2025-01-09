<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListPredictorBacktestExportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Path
 * @property string $RoleArn
 * @property string $KMSKeyArn
 */
class S3Config extends Shape
{
    /**
     * @param array{
     *     Path: string,
     *     RoleArn: string,
     *     KMSKeyArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
