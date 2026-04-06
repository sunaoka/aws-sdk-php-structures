<?php

namespace Sunaoka\Aws\Structures\DataZone\RemovePolicyGrant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property 'DOMAIN_UNIT'|'ENVIRONMENT_BLUEPRINT_CONFIGURATION'|'ENVIRONMENT_PROFILE'|'ASSET_TYPE' $entityType
 * @property string $entityIdentifier
 * @property 'CREATE_DOMAIN_UNIT'|'OVERRIDE_DOMAIN_UNIT_OWNERS'|'ADD_TO_PROJECT_MEMBER_POOL'|'OVERRIDE_PROJECT_OWNERS'|'CREATE_GLOSSARY'|'CREATE_FORM_TYPE'|'CREATE_ASSET_TYPE'|'CREATE_PROJECT'|'CREATE_ENVIRONMENT_PROFILE'|'DELEGATE_CREATE_ENVIRONMENT_PROFILE'|'CREATE_ENVIRONMENT'|'CREATE_ENVIRONMENT_FROM_BLUEPRINT'|'CREATE_PROJECT_FROM_PROJECT_PROFILE'|'USE_ASSET_TYPE' $policyType
 * @property Shapes\PolicyGrantPrincipal $principal
 * @property string|null $grantIdentifier
 * @property string|null $clientToken
 */
class RemovePolicyGrantRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     entityType: 'DOMAIN_UNIT'|'ENVIRONMENT_BLUEPRINT_CONFIGURATION'|'ENVIRONMENT_PROFILE'|'ASSET_TYPE',
     *     entityIdentifier: string,
     *     policyType: 'CREATE_DOMAIN_UNIT'|'OVERRIDE_DOMAIN_UNIT_OWNERS'|'ADD_TO_PROJECT_MEMBER_POOL'|'OVERRIDE_PROJECT_OWNERS'|'CREATE_GLOSSARY'|'CREATE_FORM_TYPE'|'CREATE_ASSET_TYPE'|'CREATE_PROJECT'|'CREATE_ENVIRONMENT_PROFILE'|'DELEGATE_CREATE_ENVIRONMENT_PROFILE'|'CREATE_ENVIRONMENT'|'CREATE_ENVIRONMENT_FROM_BLUEPRINT'|'CREATE_PROJECT_FROM_PROJECT_PROFILE'|'USE_ASSET_TYPE',
     *     principal: Shapes\PolicyGrantPrincipal,
     *     grantIdentifier?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
