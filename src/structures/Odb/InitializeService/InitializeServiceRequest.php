<?php

namespace Sunaoka\Aws\Structures\Odb\InitializeService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $ociIdentityDomain
 * @property 'ENABLED'|'DISABLED'|null $autonomousDatabaseOciAwsSecretsManagerIntegration
 */
class InitializeServiceRequest extends Request
{
    /**
     * @param array{
     *     ociIdentityDomain?: bool|null,
     *     autonomousDatabaseOciAwsSecretsManagerIntegration?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
