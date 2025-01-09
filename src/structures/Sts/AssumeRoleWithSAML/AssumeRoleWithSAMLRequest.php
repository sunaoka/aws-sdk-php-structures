<?php

namespace Sunaoka\Aws\Structures\Sts\AssumeRoleWithSAML;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoleArn
 * @property string $PrincipalArn
 * @property string $SAMLAssertion
 * @property list<Shapes\PolicyDescriptorType> $PolicyArns
 * @property string $Policy
 * @property int<900, 43200> $DurationSeconds
 */
class AssumeRoleWithSAMLRequest extends Request
{
    /**
     * @param array{
     *     RoleArn: string,
     *     PrincipalArn: string,
     *     SAMLAssertion: string,
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
