<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetUserAccessLoggingSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $userAccessLoggingSettingsArn
 * @property list<string>|null $associatedPortalArns
 * @property string|null $kinesisStreamArn
 */
class UserAccessLoggingSettings extends Shape
{
    /**
     * @param array{
     *     userAccessLoggingSettingsArn: string,
     *     associatedPortalArns?: list<string>|null,
     *     kinesisStreamArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
