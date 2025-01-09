<?php

namespace Sunaoka\Aws\Structures\Macie2\PutFindingsPublicationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property Shapes\SecurityHubConfiguration $securityHubConfiguration
 */
class PutFindingsPublicationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     securityHubConfiguration?: Shapes\SecurityHubConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
