<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\PutAppInstanceUserExpirationSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceUserArn
 * @property Shapes\ExpirationSettings|null $ExpirationSettings
 */
class PutAppInstanceUserExpirationSettingsRequest extends Request
{
    /**
     * @param array{
     *     AppInstanceUserArn: string,
     *     ExpirationSettings?: Shapes\ExpirationSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
