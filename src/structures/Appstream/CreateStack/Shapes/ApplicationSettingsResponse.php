<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateStack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property string|null $SettingsGroup
 * @property string|null $S3BucketName
 */
class ApplicationSettingsResponse extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     SettingsGroup?: string|null,
     *     S3BucketName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
