<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateRuleGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property int<1, max> $Capacity
 * @property string|null $Description
 * @property list<Shapes\Rule>|null $Rules
 * @property Shapes\VisibilityConfig $VisibilityConfig
 * @property list<Shapes\Tag>|null $Tags
 * @property array<string, Shapes\CustomResponseBody>|null $CustomResponseBodies
 */
class CreateRuleGroupRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Scope: 'CLOUDFRONT'|'REGIONAL',
     *     Capacity: int<1, max>,
     *     Description?: string|null,
     *     Rules?: list<Shapes\Rule>|null,
     *     VisibilityConfig: Shapes\VisibilityConfig,
     *     Tags?: list<Shapes\Tag>|null,
     *     CustomResponseBodies?: array<string, Shapes\CustomResponseBody>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
