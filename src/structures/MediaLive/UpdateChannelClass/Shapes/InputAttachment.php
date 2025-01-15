<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutomaticInputFailoverSettings|null $AutomaticInputFailoverSettings
 * @property string|null $InputAttachmentName
 * @property string|null $InputId
 * @property InputSettings|null $InputSettings
 * @property list<string>|null $LogicalInterfaceNames
 */
class InputAttachment extends Shape
{
    /**
     * @param array{
     *     AutomaticInputFailoverSettings?: AutomaticInputFailoverSettings|null,
     *     InputAttachmentName?: string|null,
     *     InputId?: string|null,
     *     InputSettings?: InputSettings|null,
     *     LogicalInterfaceNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
