<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateWorkspacesPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'ENABLED' $Status
 * @property string $SettingsGroup
 * @property string $S3BucketName
 */
class ApplicationSettingsResponse extends Shape
{
    /**
     * @param array{
     *     Status: 'DISABLED'|'ENABLED',
     *     SettingsGroup?: string,
     *     S3BucketName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
