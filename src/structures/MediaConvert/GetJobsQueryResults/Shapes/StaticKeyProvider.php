<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobsQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KeyFormat
 * @property string|null $KeyFormatVersions
 * @property string|null $StaticKeyValue
 * @property string|null $Url
 */
class StaticKeyProvider extends Shape
{
    /**
     * @param array{
     *     KeyFormat?: string|null,
     *     KeyFormatVersions?: string|null,
     *     StaticKeyValue?: string|null,
     *     Url?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
