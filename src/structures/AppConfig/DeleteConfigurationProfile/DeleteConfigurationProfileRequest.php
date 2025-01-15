<?php

namespace Sunaoka\Aws\Structures\AppConfig\DeleteConfigurationProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $ConfigurationProfileId
 * @property 'ACCOUNT_DEFAULT'|'APPLY'|'BYPASS'|null $DeletionProtectionCheck
 */
class DeleteConfigurationProfileRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     ConfigurationProfileId: string,
     *     DeletionProtectionCheck?: 'ACCOUNT_DEFAULT'|'APPLY'|'BYPASS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
