<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateWebACL;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property string $Id
 * @property Shapes\DefaultAction $DefaultAction
 * @property string|null $Description
 * @property list<Shapes\Rule>|null $Rules
 * @property Shapes\VisibilityConfig $VisibilityConfig
 * @property Shapes\DataProtectionConfig|null $DataProtectionConfig
 * @property string $LockToken
 * @property array<string, Shapes\CustomResponseBody>|null $CustomResponseBodies
 * @property Shapes\CaptchaConfig|null $CaptchaConfig
 * @property Shapes\ChallengeConfig|null $ChallengeConfig
 * @property list<string>|null $TokenDomains
 * @property Shapes\AssociationConfig|null $AssociationConfig
 */
class UpdateWebACLRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Scope: 'CLOUDFRONT'|'REGIONAL',
     *     Id: string,
     *     DefaultAction: Shapes\DefaultAction,
     *     Description?: string|null,
     *     Rules?: list<Shapes\Rule>|null,
     *     VisibilityConfig: Shapes\VisibilityConfig,
     *     DataProtectionConfig?: Shapes\DataProtectionConfig|null,
     *     LockToken: string,
     *     CustomResponseBodies?: array<string, Shapes\CustomResponseBody>|null,
     *     CaptchaConfig?: Shapes\CaptchaConfig|null,
     *     ChallengeConfig?: Shapes\ChallengeConfig|null,
     *     TokenDomains?: list<string>|null,
     *     AssociationConfig?: Shapes\AssociationConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
