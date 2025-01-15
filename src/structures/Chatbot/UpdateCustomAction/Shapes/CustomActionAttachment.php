<?php

namespace Sunaoka\Aws\Structures\Chatbot\UpdateCustomAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NotificationType
 * @property string|null $ButtonText
 * @property list<CustomActionAttachmentCriteria>|null $Criteria
 * @property array<string, string>|null $Variables
 */
class CustomActionAttachment extends Shape
{
    /**
     * @param array{
     *     NotificationType?: string|null,
     *     ButtonText?: string|null,
     *     Criteria?: list<CustomActionAttachmentCriteria>|null,
     *     Variables?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
