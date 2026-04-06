<?php

namespace Sunaoka\Aws\Structures\DataZone\AddPolicyGrant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property Shapes\PolicyGrantDetail $detail
 * @property string $domainIdentifier
 * @property string $entityIdentifier
 * @property 'DOMAIN_UNIT'|'ENVIRONMENT_BLUEPRINT_CONFIGURATION'|'ENVIRONMENT_PROFILE' $entityType
 * @property 'CREATE_DOMAIN_UNIT'|'OVERRIDE_DOMAIN_UNIT_OWNERS'|'ADD_TO_PROJECT_MEMBER_POOL'|'OVERRIDE_PROJECT_OWNERS'|'CREATE_GLOSSARY'|'CREATE_FORM_TYPE'|'CREATE_ASSET_TYPE'|'CREATE_PROJECT'|'CREATE_ENVIRONMENT_PROFILE'|'DELEGATE_CREATE_ENVIRONMENT_PROFILE'|'CREATE_ENVIRONMENT'|'CREATE_ENVIRONMENT_FROM_BLUEPRINT'|'CREATE_PROJECT_FROM_PROJECT_PROFILE' $policyType
 * @property Shapes\PolicyGrantPrincipal $principal
 */
class AddPolicyGrantRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     detail: Shapes\PolicyGrantDetail,
     *     domainIdentifier: string,
     *     entityIdentifier: string,
     *     entityType: 'DOMAIN_UNIT'|'ENVIRONMENT_BLUEPRINT_CONFIGURATION'|'ENVIRONMENT_PROFILE',
     *     policyType: 'CREATE_DOMAIN_UNIT'|'OVERRIDE_DOMAIN_UNIT_OWNERS'|'ADD_TO_PROJECT_MEMBER_POOL'|'OVERRIDE_PROJECT_OWNERS'|'CREATE_GLOSSARY'|'CREATE_FORM_TYPE'|'CREATE_ASSET_TYPE'|'CREATE_PROJECT'|'CREATE_ENVIRONMENT_PROFILE'|'DELEGATE_CREATE_ENVIRONMENT_PROFILE'|'CREATE_ENVIRONMENT'|'CREATE_ENVIRONMENT_FROM_BLUEPRINT'|'CREATE_PROJECT_FROM_PROJECT_PROFILE',
     *     principal: Shapes\PolicyGrantPrincipal
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
