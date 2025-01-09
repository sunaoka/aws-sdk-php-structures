<?php

namespace Sunaoka\Aws\Structures\Chatbot\GetCustomAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CustomActionArn
 * @property CustomActionDefinition $Definition
 * @property string $AliasName
 * @property list<CustomActionAttachment> $Attachments
 * @property string $ActionName
 */
class CustomAction extends Shape
{
    /**
     * @param array{
     *     CustomActionArn: string,
     *     Definition: CustomActionDefinition,
     *     AliasName?: string,
     *     Attachments?: list<CustomActionAttachment>,
     *     ActionName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
