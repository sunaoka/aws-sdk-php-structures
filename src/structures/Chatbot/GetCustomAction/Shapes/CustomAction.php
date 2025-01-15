<?php

namespace Sunaoka\Aws\Structures\Chatbot\GetCustomAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CustomActionArn
 * @property CustomActionDefinition $Definition
 * @property string|null $AliasName
 * @property list<CustomActionAttachment>|null $Attachments
 * @property string|null $ActionName
 */
class CustomAction extends Shape
{
    /**
     * @param array{
     *     CustomActionArn: string,
     *     Definition: CustomActionDefinition,
     *     AliasName?: string|null,
     *     Attachments?: list<CustomActionAttachment>|null,
     *     ActionName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
