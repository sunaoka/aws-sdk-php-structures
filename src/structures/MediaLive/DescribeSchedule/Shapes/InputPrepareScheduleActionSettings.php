<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InputAttachmentNameReference
 * @property InputClippingSettings|null $InputClippingSettings
 * @property list<string>|null $UrlPath
 */
class InputPrepareScheduleActionSettings extends Shape
{
    /**
     * @param array{
     *     InputAttachmentNameReference?: string|null,
     *     InputClippingSettings?: InputClippingSettings|null,
     *     UrlPath?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
