<?php

namespace Sunaoka\Aws\Structures\Sts\AssumeRoleWithSAML;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoleArn
 * @property string $PrincipalArn
 * @property string $SAMLAssertion
 * @property list<Shapes\PolicyDescriptorType>|null $PolicyArns
 * @property string|null $Policy
 * @property int<900, 43200>|null $DurationSeconds
 * @property int<0, 4096>|null $MinimumSessionTokenSize
 */
class AssumeRoleWithSAMLRequest extends Request
{
    /**
     * @param array{
     *     RoleArn: string,
     *     PrincipalArn: string,
     *     SAMLAssertion: string,
     *     PolicyArns?: list<Shapes\PolicyDescriptorType>|null,
     *     Policy?: string|null,
     *     DurationSeconds?: int<900, 43200>|null,
     *     MinimumSessionTokenSize?: int<0, 4096>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
