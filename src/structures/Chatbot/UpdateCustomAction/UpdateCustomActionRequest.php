<?php

namespace Sunaoka\Aws\Structures\Chatbot\UpdateCustomAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CustomActionArn
 * @property Shapes\CustomActionDefinition $Definition
 * @property string|null $AliasName
 * @property list<Shapes\CustomActionAttachment>|null $Attachments
 */
class UpdateCustomActionRequest extends Request
{
    /**
     * @param array{
     *     CustomActionArn: string,
     *     Definition: Shapes\CustomActionDefinition,
     *     AliasName?: string|null,
     *     Attachments?: list<Shapes\CustomActionAttachment>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
