<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetUserAccessLoggingSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $associatedPortalArns
 * @property string|null $kinesisStreamArn
 * @property string $userAccessLoggingSettingsArn
 */
class UserAccessLoggingSettings extends Shape
{
    /**
     * @param array{
     *     associatedPortalArns?: list<string>|null,
     *     kinesisStreamArn?: string|null,
     *     userAccessLoggingSettingsArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
