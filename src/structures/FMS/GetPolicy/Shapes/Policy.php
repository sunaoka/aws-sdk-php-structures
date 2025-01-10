<?php

namespace Sunaoka\Aws\Structures\FMS\GetPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyId
 * @property string $PolicyName
 * @property string $PolicyUpdateToken
 * @property SecurityServicePolicyData $SecurityServicePolicyData
 * @property string $ResourceType
 * @property list<string> $ResourceTypeList
 * @property list<ResourceTag> $ResourceTags
 * @property bool $ExcludeResourceTags
 * @property bool $RemediationEnabled
 * @property bool $DeleteUnusedFMManagedResources
 * @property array<'ACCOUNT'|'ORG_UNIT', list<string>> $IncludeMap
 * @property array<'ACCOUNT'|'ORG_UNIT', list<string>> $ExcludeMap
 * @property list<string> $ResourceSetIds
 * @property string $PolicyDescription
 * @property 'ACTIVE'|'OUT_OF_ADMIN_SCOPE' $PolicyStatus
 * @property 'AND'|'OR' $ResourceTagLogicalOperator
 */
class Policy extends Shape
{
    /**
     * @param array{
     *     PolicyId?: string,
     *     PolicyName: string,
     *     PolicyUpdateToken?: string,
     *     SecurityServicePolicyData: SecurityServicePolicyData,
     *     ResourceType: string,
     *     ResourceTypeList?: list<string>,
     *     ResourceTags?: list<ResourceTag>,
     *     ExcludeResourceTags: bool,
     *     RemediationEnabled: bool,
     *     DeleteUnusedFMManagedResources?: bool,
     *     IncludeMap?: array<'ACCOUNT'|'ORG_UNIT', list<string>>,
     *     ExcludeMap?: array<'ACCOUNT'|'ORG_UNIT', list<string>>,
     *     ResourceSetIds?: list<string>,
     *     PolicyDescription?: string,
     *     PolicyStatus?: 'ACTIVE'|'OUT_OF_ADMIN_SCOPE',
     *     ResourceTagLogicalOperator?: 'AND'|'OR'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
