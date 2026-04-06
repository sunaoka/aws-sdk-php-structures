<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CreateProtectConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property bool|null $DeletionProtectionEnabled
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateProtectConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     DeletionProtectionEnabled?: bool|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
