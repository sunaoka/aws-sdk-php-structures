<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateWebACL;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property Shapes\DefaultAction $DefaultAction
 * @property string $Description
 * @property list<Shapes\Rule> $Rules
 * @property Shapes\VisibilityConfig $VisibilityConfig
 * @property list<Shapes\Tag> $Tags
 * @property array<string, Shapes\CustomResponseBody> $CustomResponseBodies
 * @property Shapes\CaptchaConfig $CaptchaConfig
 * @property Shapes\ChallengeConfig $ChallengeConfig
 * @property list<string> $TokenDomains
 * @property Shapes\AssociationConfig $AssociationConfig
 */
class CreateWebACLRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Scope: 'CLOUDFRONT'|'REGIONAL',
     *     DefaultAction: Shapes\DefaultAction,
     *     Description?: string,
     *     Rules?: list<Shapes\Rule>,
     *     VisibilityConfig: Shapes\VisibilityConfig,
     *     Tags?: list<Shapes\Tag>,
     *     CustomResponseBodies?: array<string, Shapes\CustomResponseBody>,
     *     CaptchaConfig?: Shapes\CaptchaConfig,
     *     ChallengeConfig?: Shapes\ChallengeConfig,
     *     TokenDomains?: list<string>,
     *     AssociationConfig?: Shapes\AssociationConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
