<?php

namespace Sunaoka\Aws\Structures\Macie2\PutFindingsPublicationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property Shapes\SecurityHubConfiguration|null $securityHubConfiguration
 */
class PutFindingsPublicationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     securityHubConfiguration?: Shapes\SecurityHubConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
