<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAccessControlApplicationSecret;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $ApplicationId
 * @property string|null $Description
 * @property Shapes\ClientSecretConfiguration $ClientSecretConfiguration
 */
class CreateAccessControlApplicationSecretRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     ApplicationId: string,
     *     Description?: string|null,
     *     ClientSecretConfiguration: Shapes\ClientSecretConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
