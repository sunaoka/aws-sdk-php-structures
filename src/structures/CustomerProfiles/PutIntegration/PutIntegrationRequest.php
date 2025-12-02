<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\PutIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string|null $Uri
 * @property string|null $ObjectTypeName
 * @property array<string, string>|null $ObjectTypeNames
 * @property array<string, string>|null $Tags
 * @property Shapes\FlowDefinition|null $FlowDefinition
 * @property string|null $RoleArn
 * @property list<string>|null $EventTriggerNames
 * @property 'PROFILE'|'DOMAIN'|null $Scope
 */
class PutIntegrationRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     Uri?: string|null,
     *     ObjectTypeName?: string|null,
     *     ObjectTypeNames?: array<string, string>|null,
     *     Tags?: array<string, string>|null,
     *     FlowDefinition?: Shapes\FlowDefinition|null,
     *     RoleArn?: string|null,
     *     EventTriggerNames?: list<string>|null,
     *     Scope?: 'PROFILE'|'DOMAIN'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
