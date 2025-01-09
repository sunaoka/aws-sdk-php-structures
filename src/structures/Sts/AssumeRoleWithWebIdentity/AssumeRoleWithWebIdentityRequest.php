<?php

namespace Sunaoka\Aws\Structures\Sts\AssumeRoleWithWebIdentity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoleArn
 * @property string $RoleSessionName
 * @property string $WebIdentityToken
 * @property string $ProviderId
 * @property list<Shapes\PolicyDescriptorType> $PolicyArns
 * @property string $Policy
 * @property int<900, 43200> $DurationSeconds
 */
class AssumeRoleWithWebIdentityRequest extends Request
{
    /**
     * @param array{
     *     RoleArn: string,
     *     RoleSessionName: string,
     *     WebIdentityToken: string,
     *     ProviderId?: string,
     *     PolicyArns?: list<Shapes\PolicyDescriptorType>,
     *     Policy?: string,
     *     DurationSeconds?: int<900, 43200>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
