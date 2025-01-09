<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateRuleGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property int<1, max> $Capacity
 * @property string $Description
 * @property list<Shapes\Rule> $Rules
 * @property Shapes\VisibilityConfig $VisibilityConfig
 * @property list<Shapes\Tag> $Tags
 * @property array<string, Shapes\CustomResponseBody> $CustomResponseBodies
 */
class CreateRuleGroupRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Scope: 'CLOUDFRONT'|'REGIONAL',
     *     Capacity: int<1, max>,
     *     Description?: string,
     *     Rules?: list<Shapes\Rule>,
     *     VisibilityConfig: Shapes\VisibilityConfig,
     *     Tags?: list<Shapes\Tag>,
     *     CustomResponseBodies?: array<string, Shapes\CustomResponseBody>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
