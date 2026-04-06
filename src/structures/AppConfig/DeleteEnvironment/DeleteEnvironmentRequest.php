<?php

namespace Sunaoka\Aws\Structures\AppConfig\DeleteEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EnvironmentId
 * @property string $ApplicationId
 * @property 'ACCOUNT_DEFAULT'|'APPLY'|'BYPASS'|null $DeletionProtectionCheck
 */
class DeleteEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     EnvironmentId: string,
     *     ApplicationId: string,
     *     DeletionProtectionCheck?: 'ACCOUNT_DEFAULT'|'APPLY'|'BYPASS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
