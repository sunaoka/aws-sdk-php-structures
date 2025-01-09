<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CreateToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LicenseArn
 * @property list<string> $RoleArns
 * @property int $ExpirationInDays
 * @property list<string> $TokenProperties
 * @property string $ClientToken
 */
class CreateTokenRequest extends Request
{
    /**
     * @param array{
     *     LicenseArn: string,
     *     RoleArns?: list<string>,
     *     ExpirationInDays?: int,
     *     TokenProperties?: list<string>,
     *     ClientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
