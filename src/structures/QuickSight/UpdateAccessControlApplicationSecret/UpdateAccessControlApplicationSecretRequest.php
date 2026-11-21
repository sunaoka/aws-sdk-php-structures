<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAccessControlApplicationSecret;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $ApplicationId
 * @property string $ClientSecretId
 * @property array<string, string>|null $UpdateRegionalSecretManagerArns
 * @property list<string>|null $RemoveRegionalSecretManagerArns
 */
class UpdateAccessControlApplicationSecretRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     ApplicationId: string,
     *     ClientSecretId: string,
     *     UpdateRegionalSecretManagerArns?: array<string, string>|null,
     *     RemoveRegionalSecretManagerArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
