<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteAccessControlApplicationSecret;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $ApplicationId
 * @property string $ClientSecretId
 */
class DeleteAccessControlApplicationSecretRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     ApplicationId: string,
     *     ClientSecretId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
