<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\GetAppInstanceRetentionSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceArn
 */
class GetAppInstanceRetentionSettingsRequest extends Request
{
    /**
     * @param array{AppInstanceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
