<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CreateRcsAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DeletionProtectionEnabled
 * @property string|null $OptOutListName
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ClientToken
 */
class CreateRcsAgentRequest extends Request
{
    /**
     * @param array{
     *     DeletionProtectionEnabled?: bool|null,
     *     OptOutListName?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
