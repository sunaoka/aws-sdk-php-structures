<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateRuleGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property string $Id
 * @property string|null $Description
 * @property list<Shapes\Rule>|null $Rules
 * @property Shapes\VisibilityConfig $VisibilityConfig
 * @property string $LockToken
 * @property array<string, Shapes\CustomResponseBody>|null $CustomResponseBodies
 */
class UpdateRuleGroupRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Scope: 'CLOUDFRONT'|'REGIONAL',
     *     Id: string,
     *     Description?: string|null,
     *     Rules?: list<Shapes\Rule>|null,
     *     VisibilityConfig: Shapes\VisibilityConfig,
     *     LockToken: string,
     *     CustomResponseBodies?: array<string, Shapes\CustomResponseBody>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
