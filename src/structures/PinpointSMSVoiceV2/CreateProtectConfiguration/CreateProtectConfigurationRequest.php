<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CreateProtectConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property bool $DeletionProtectionEnabled
 * @property list<Shapes\Tag> $Tags
 */
class CreateProtectConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     DeletionProtectionEnabled?: bool,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
