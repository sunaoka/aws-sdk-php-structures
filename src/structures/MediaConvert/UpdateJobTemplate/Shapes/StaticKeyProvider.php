<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KeyFormat
 * @property string $KeyFormatVersions
 * @property string $StaticKeyValue
 * @property string $Url
 */
class StaticKeyProvider extends Shape
{
    /**
     * @param array{
     *     KeyFormat?: string,
     *     KeyFormatVersions?: string,
     *     StaticKeyValue?: string,
     *     Url?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
