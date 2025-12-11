<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateMessageTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PushADMMessageTemplateContent|null $adm
 * @property PushAPNSMessageTemplateContent|null $apns
 * @property PushFCMMessageTemplateContent|null $fcm
 * @property PushBaiduMessageTemplateContent|null $baidu
 */
class PushMessageTemplateContent extends Shape
{
    /**
     * @param array{
     *     adm?: PushADMMessageTemplateContent|null,
     *     apns?: PushAPNSMessageTemplateContent|null,
     *     fcm?: PushFCMMessageTemplateContent|null,
     *     baidu?: PushBaiduMessageTemplateContent|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
