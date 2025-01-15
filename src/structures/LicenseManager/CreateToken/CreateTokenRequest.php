<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CreateToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LicenseArn
 * @property list<string>|null $RoleArns
 * @property int|null $ExpirationInDays
 * @property list<string>|null $TokenProperties
 * @property string $ClientToken
 */
class CreateTokenRequest extends Request
{
    /**
     * @param array{
     *     LicenseArn: string,
     *     RoleArns?: list<string>|null,
     *     ExpirationInDays?: int|null,
     *     TokenProperties?: list<string>|null,
     *     ClientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
