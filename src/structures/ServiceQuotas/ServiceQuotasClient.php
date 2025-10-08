<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas;

class ServiceQuotasClient extends \Aws\ServiceQuotas\ServiceQuotasClient
{
    use AssociateServiceQuotaTemplate\AssociateServiceQuotaTemplateTrait;
    use CreateSupportCase\CreateSupportCaseTrait;
    use DeleteServiceQuotaIncreaseRequestFromTemplate\DeleteServiceQuotaIncreaseRequestFromTemplateTrait;
    use DisassociateServiceQuotaTemplate\DisassociateServiceQuotaTemplateTrait;
    use GetAWSDefaultServiceQuota\GetAWSDefaultServiceQuotaTrait;
    use GetAssociationForServiceQuotaTemplate\GetAssociationForServiceQuotaTemplateTrait;
    use GetAutoManagementConfiguration\GetAutoManagementConfigurationTrait;
    use GetRequestedServiceQuotaChange\GetRequestedServiceQuotaChangeTrait;
    use GetServiceQuota\GetServiceQuotaTrait;
    use GetServiceQuotaIncreaseRequestFromTemplate\GetServiceQuotaIncreaseRequestFromTemplateTrait;
    use ListAWSDefaultServiceQuotas\ListAWSDefaultServiceQuotasTrait;
    use ListRequestedServiceQuotaChangeHistory\ListRequestedServiceQuotaChangeHistoryTrait;
    use ListRequestedServiceQuotaChangeHistoryByQuota\ListRequestedServiceQuotaChangeHistoryByQuotaTrait;
    use ListServiceQuotaIncreaseRequestsInTemplate\ListServiceQuotaIncreaseRequestsInTemplateTrait;
    use ListServiceQuotas\ListServiceQuotasTrait;
    use ListServices\ListServicesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutServiceQuotaIncreaseRequestIntoTemplate\PutServiceQuotaIncreaseRequestIntoTemplateTrait;
    use RequestServiceQuotaIncrease\RequestServiceQuotaIncreaseTrait;
    use StartAutoManagement\StartAutoManagementTrait;
    use StopAutoManagement\StopAutoManagementTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAutoManagement\UpdateAutoManagementTrait;
}
