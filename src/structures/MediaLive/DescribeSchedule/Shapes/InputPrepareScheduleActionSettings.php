<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InputAttachmentNameReference
 * @property InputClippingSettings $InputClippingSettings
 * @property list<string> $UrlPath
 */
class InputPrepareScheduleActionSettings extends Shape
{
    /**
     * @param array{
     *     InputAttachmentNameReference?: string,
     *     InputClippingSettings?: InputClippingSettings,
     *     UrlPath?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
