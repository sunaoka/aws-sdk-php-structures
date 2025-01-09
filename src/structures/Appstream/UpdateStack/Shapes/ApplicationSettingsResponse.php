<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateStack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property string $SettingsGroup
 * @property string $S3BucketName
 */
class ApplicationSettingsResponse extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     SettingsGroup?: string,
     *     S3BucketName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
