<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\DeleteServicePrincipalName;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorArn
 * @property string $DirectoryRegistrationArn
 */
class DeleteServicePrincipalNameRequest extends Request
{
    /**
     * @param array{
     *     ConnectorArn: string,
     *     DirectoryRegistrationArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
