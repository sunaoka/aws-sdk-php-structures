<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\CreateServicePrincipalName;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $ConnectorArn
 * @property string $DirectoryRegistrationArn
 */
class CreateServicePrincipalNameRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     ConnectorArn: string,
     *     DirectoryRegistrationArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
