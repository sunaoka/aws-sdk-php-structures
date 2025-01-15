<?php

namespace Sunaoka\Aws\Structures\FMS\PutPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PolicyId
 * @property string $PolicyName
 * @property string|null $PolicyUpdateToken
 * @property SecurityServicePolicyData $SecurityServicePolicyData
 * @property string $ResourceType
 * @property list<string>|null $ResourceTypeList
 * @property list<ResourceTag>|null $ResourceTags
 * @property bool $ExcludeResourceTags
 * @property bool $RemediationEnabled
 * @property bool|null $DeleteUnusedFMManagedResources
 * @property array<'ACCOUNT'|'ORG_UNIT', list<string>>|null $IncludeMap
 * @property array<'ACCOUNT'|'ORG_UNIT', list<string>>|null $ExcludeMap
 * @property list<string>|null $ResourceSetIds
 * @property string|null $PolicyDescription
 * @property 'ACTIVE'|'OUT_OF_ADMIN_SCOPE'|null $PolicyStatus
 * @property 'AND'|'OR'|null $ResourceTagLogicalOperator
 */
class Policy extends Shape
{
    /**
     * @param array{
     *     PolicyId?: string|null,
     *     PolicyName: string,
     *     PolicyUpdateToken?: string|null,
     *     SecurityServicePolicyData: SecurityServicePolicyData,
     *     ResourceType: string,
     *     ResourceTypeList?: list<string>|null,
     *     ResourceTags?: list<ResourceTag>|null,
     *     ExcludeResourceTags: bool,
     *     RemediationEnabled: bool,
     *     DeleteUnusedFMManagedResources?: bool|null,
     *     IncludeMap?: array<'ACCOUNT'|'ORG_UNIT', list<string>>|null,
     *     ExcludeMap?: array<'ACCOUNT'|'ORG_UNIT', list<string>>|null,
     *     ResourceSetIds?: list<string>|null,
     *     PolicyDescription?: string|null,
     *     PolicyStatus?: 'ACTIVE'|'OUT_OF_ADMIN_SCOPE'|null,
     *     ResourceTagLogicalOperator?: 'AND'|'OR'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
