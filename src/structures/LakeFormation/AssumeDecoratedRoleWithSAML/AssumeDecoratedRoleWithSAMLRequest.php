<?php

namespace Sunaoka\Aws\Structures\LakeFormation\AssumeDecoratedRoleWithSAML;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SAMLAssertion
 * @property string $RoleArn
 * @property string $PrincipalArn
 * @property int<900, 43200>|null $DurationSeconds
 */
class AssumeDecoratedRoleWithSAMLRequest extends Request
{
    /**
     * @param array{
     *     SAMLAssertion: string,
     *     RoleArn: string,
     *     PrincipalArn: string,
     *     DurationSeconds?: int<900, 43200>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
