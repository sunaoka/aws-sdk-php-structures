<?php

namespace Sunaoka\Aws\Structures\Chatbot\CreateCustomAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CustomActionDefinition $Definition
 * @property string|null $AliasName
 * @property list<Shapes\CustomActionAttachment>|null $Attachments
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ClientToken
 * @property string $ActionName
 */
class CreateCustomActionRequest extends Request
{
    /**
     * @param array{
     *     Definition: Shapes\CustomActionDefinition,
     *     AliasName?: string|null,
     *     Attachments?: list<Shapes\CustomActionAttachment>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     ClientToken?: string|null,
     *     ActionName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
