<?php

namespace Sunaoka\Aws\Structures\Chatbot\CreateCustomAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CustomActionDefinition $Definition
 * @property string $AliasName
 * @property list<Shapes\CustomActionAttachment> $Attachments
 * @property list<Shapes\Tag> $Tags
 * @property string $ClientToken
 * @property string $ActionName
 */
class CreateCustomActionRequest extends Request
{
    /**
     * @param array{
     *     Definition: Shapes\CustomActionDefinition,
     *     AliasName?: string,
     *     Attachments?: list<Shapes\CustomActionAttachment>,
     *     Tags?: list<Shapes\Tag>,
     *     ClientToken?: string,
     *     ActionName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
