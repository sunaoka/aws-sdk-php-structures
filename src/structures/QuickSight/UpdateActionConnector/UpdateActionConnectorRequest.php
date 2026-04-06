<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateActionConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $ActionConnectorId
 * @property string $Name
 * @property Shapes\AuthConfig $AuthenticationConfig
 * @property string|null $Description
 * @property string|null $VpcConnectionArn
 */
class UpdateActionConnectorRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     ActionConnectorId: string,
     *     Name: string,
     *     AuthenticationConfig: Shapes\AuthConfig,
     *     Description?: string|null,
     *     VpcConnectionArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
