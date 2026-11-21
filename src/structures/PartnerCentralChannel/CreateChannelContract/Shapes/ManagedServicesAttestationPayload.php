<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\CreateChannelContract\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $legalEntityName
 * @property string $relationshipIdentifier
 * @property string $programManagementAccountIdentifier
 * @property list<string>|null $memberAccountIds
 * @property \Aws\Api\DateTimeResult $endDate
 * @property list<'MONITORING'|'PATCHING'|'SECURITY'|'BACKUP_AND_DISASTER_RECOVERY'|'FINANCIAL_OPERATIONS'|'INFRASTRUCTURE_AS_CODE_AND_AUTOMATION'|'WELL_ARCHITECTED'|'ARTIFICIAL_INTELLIGENCE_AND_MACHINE_LEARNING_OPERATIONS'> $supportedServices
 * @property Address $legalEntityAddress
 * @property string $signatoryName
 * @property string $signatoryEmail
 */
class ManagedServicesAttestationPayload extends Shape
{
    /**
     * @param array{
     *     legalEntityName: string,
     *     relationshipIdentifier: string,
     *     programManagementAccountIdentifier: string,
     *     memberAccountIds?: list<string>|null,
     *     endDate: \Aws\Api\DateTimeResult,
     *     supportedServices: list<'MONITORING'|'PATCHING'|'SECURITY'|'BACKUP_AND_DISASTER_RECOVERY'|'FINANCIAL_OPERATIONS'|'INFRASTRUCTURE_AS_CODE_AND_AUTOMATION'|'WELL_ARCHITECTED'|'ARTIFICIAL_INTELLIGENCE_AND_MACHINE_LEARNING_OPERATIONS'>,
     *     legalEntityAddress: Address,
     *     signatoryName: string,
     *     signatoryEmail: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
