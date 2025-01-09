<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetUserAccessLoggingSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $associatedPortalArns
 * @property string $kinesisStreamArn
 * @property string $userAccessLoggingSettingsArn
 */
class UserAccessLoggingSettings extends Shape
{
    /**
     * @param array{
     *     associatedPortalArns?: list<string>,
     *     kinesisStreamArn?: string,
     *     userAccessLoggingSettingsArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
