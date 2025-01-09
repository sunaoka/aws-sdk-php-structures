<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\PutAppInstanceUserExpirationSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceUserArn
 * @property Shapes\ExpirationSettings $ExpirationSettings
 */
class PutAppInstanceUserExpirationSettingsRequest extends Request
{
    /**
     * @param array{
     *     AppInstanceUserArn: string,
     *     ExpirationSettings?: Shapes\ExpirationSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
