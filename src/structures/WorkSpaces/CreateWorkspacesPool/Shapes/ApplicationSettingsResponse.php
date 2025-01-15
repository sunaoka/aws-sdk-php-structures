<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateWorkspacesPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'ENABLED' $Status
 * @property string|null $SettingsGroup
 * @property string|null $S3BucketName
 */
class ApplicationSettingsResponse extends Shape
{
    /**
     * @param array{
     *     Status: 'DISABLED'|'ENABLED',
     *     SettingsGroup?: string|null,
     *     S3BucketName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
