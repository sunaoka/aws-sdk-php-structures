<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateStack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CLIPBOARD_COPY_FROM_LOCAL_DEVICE'|'CLIPBOARD_COPY_TO_LOCAL_DEVICE'|'FILE_UPLOAD'|'FILE_DOWNLOAD'|'PRINTING_TO_LOCAL_DEVICE'|'DOMAIN_PASSWORD_SIGNIN'|'DOMAIN_SMART_CARD_SIGNIN'|'AUTO_TIME_ZONE_REDIRECTION' $Action
 * @property 'ENABLED'|'DISABLED' $Permission
 * @property int|null $MaximumLength
 */
class UserSetting extends Shape
{
    /**
     * @param array{
     *     Action: 'CLIPBOARD_COPY_FROM_LOCAL_DEVICE'|'CLIPBOARD_COPY_TO_LOCAL_DEVICE'|'FILE_UPLOAD'|'FILE_DOWNLOAD'|'PRINTING_TO_LOCAL_DEVICE'|'DOMAIN_PASSWORD_SIGNIN'|'DOMAIN_SMART_CARD_SIGNIN'|'AUTO_TIME_ZONE_REDIRECTION',
     *     Permission: 'ENABLED'|'DISABLED',
     *     MaximumLength?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
