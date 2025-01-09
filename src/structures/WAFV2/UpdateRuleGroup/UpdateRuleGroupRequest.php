<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateRuleGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property string $Id
 * @property string $Description
 * @property list<Shapes\Rule> $Rules
 * @property Shapes\VisibilityConfig $VisibilityConfig
 * @property string $LockToken
 * @property array<string, Shapes\CustomResponseBody> $CustomResponseBodies
 */
class UpdateRuleGroupRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Scope: 'CLOUDFRONT'|'REGIONAL',
     *     Id: string,
     *     Description?: string,
     *     Rules?: list<Shapes\Rule>,
     *     VisibilityConfig: Shapes\VisibilityConfig,
     *     LockToken: string,
     *     CustomResponseBodies?: array<string, Shapes\CustomResponseBody>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
