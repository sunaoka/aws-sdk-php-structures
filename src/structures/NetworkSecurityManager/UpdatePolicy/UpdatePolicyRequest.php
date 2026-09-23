<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\UpdatePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyIdentifier
 * @property string $updateToken
 * @property string|null $policyDescription
 * @property int<1, max>|null $priority
 * @property list<Shapes\TemplateOrRuleReference>|null $associatedTemplateAndRuleList
 * @property Shapes\PolicyConfiguration|null $policyConfiguration
 * @property bool $isPublished
 * @property string|null $clientToken
 */
class UpdatePolicyRequest extends Request
{
    /**
     * @param array{
     *     policyIdentifier: string,
     *     updateToken: string,
     *     policyDescription?: string|null,
     *     priority?: int<1, max>|null,
     *     associatedTemplateAndRuleList?: list<Shapes\TemplateOrRuleReference>|null,
     *     policyConfiguration?: Shapes\PolicyConfiguration|null,
     *     isPublished: bool,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
