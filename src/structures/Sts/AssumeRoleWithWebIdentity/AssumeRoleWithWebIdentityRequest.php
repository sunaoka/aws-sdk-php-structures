<?php

namespace Sunaoka\Aws\Structures\Sts\AssumeRoleWithWebIdentity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoleArn
 * @property string $RoleSessionName
 * @property string $WebIdentityToken
 * @property string|null $ProviderId
 * @property list<Shapes\PolicyDescriptorType>|null $PolicyArns
 * @property string|null $Policy
 * @property int<900, 43200>|null $DurationSeconds
 */
class AssumeRoleWithWebIdentityRequest extends Request
{
    /**
     * @param array{
     *     RoleArn: string,
     *     RoleSessionName: string,
     *     WebIdentityToken: string,
     *     ProviderId?: string|null,
     *     PolicyArns?: list<Shapes\PolicyDescriptorType>|null,
     *     Policy?: string|null,
     *     DurationSeconds?: int<900, 43200>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
