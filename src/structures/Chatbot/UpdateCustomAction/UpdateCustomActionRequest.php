<?php

namespace Sunaoka\Aws\Structures\Chatbot\UpdateCustomAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CustomActionArn
 * @property Shapes\CustomActionDefinition $Definition
 * @property string $AliasName
 * @property list<Shapes\CustomActionAttachment> $Attachments
 */
class UpdateCustomActionRequest extends Request
{
    /**
     * @param array{
     *     CustomActionArn: string,
     *     Definition: Shapes\CustomActionDefinition,
     *     AliasName?: string,
     *     Attachments?: list<Shapes\CustomActionAttachment>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
