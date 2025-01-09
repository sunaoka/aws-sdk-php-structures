<?php

namespace Sunaoka\Aws\Structures\Chatbot\GetCustomAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NotificationType
 * @property string $ButtonText
 * @property list<CustomActionAttachmentCriteria> $Criteria
 * @property array<string, string> $Variables
 */
class CustomActionAttachment extends Shape
{
    /**
     * @param array{
     *     NotificationType?: string,
     *     ButtonText?: string,
     *     Criteria?: list<CustomActionAttachmentCriteria>,
     *     Variables?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
