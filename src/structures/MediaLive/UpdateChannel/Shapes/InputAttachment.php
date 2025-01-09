<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutomaticInputFailoverSettings $AutomaticInputFailoverSettings
 * @property string $InputAttachmentName
 * @property string $InputId
 * @property InputSettings $InputSettings
 * @property list<string> $LogicalInterfaceNames
 */
class InputAttachment extends Shape
{
    /**
     * @param array{
     *     AutomaticInputFailoverSettings?: AutomaticInputFailoverSettings,
     *     InputAttachmentName?: string,
     *     InputId?: string,
     *     InputSettings?: InputSettings,
     *     LogicalInterfaceNames?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
