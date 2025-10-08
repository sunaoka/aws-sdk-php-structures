<?php

namespace Sunaoka\Aws\Structures\Route53Domains;

class Route53DomainsClient extends \Aws\Route53Domains\Route53DomainsClient
{
    use AcceptDomainTransferFromAnotherAwsAccount\AcceptDomainTransferFromAnotherAwsAccountTrait;
    use AssociateDelegationSignerToDomain\AssociateDelegationSignerToDomainTrait;
    use CancelDomainTransferToAnotherAwsAccount\CancelDomainTransferToAnotherAwsAccountTrait;
    use CheckDomainAvailability\CheckDomainAvailabilityTrait;
    use CheckDomainTransferability\CheckDomainTransferabilityTrait;
    use DeleteDomain\DeleteDomainTrait;
    use DeleteTagsForDomain\DeleteTagsForDomainTrait;
    use DisableDomainAutoRenew\DisableDomainAutoRenewTrait;
    use DisableDomainTransferLock\DisableDomainTransferLockTrait;
    use DisassociateDelegationSignerFromDomain\DisassociateDelegationSignerFromDomainTrait;
    use EnableDomainAutoRenew\EnableDomainAutoRenewTrait;
    use EnableDomainTransferLock\EnableDomainTransferLockTrait;
    use GetContactReachabilityStatus\GetContactReachabilityStatusTrait;
    use GetDomainDetail\GetDomainDetailTrait;
    use GetDomainSuggestions\GetDomainSuggestionsTrait;
    use GetOperationDetail\GetOperationDetailTrait;
    use ListDomains\ListDomainsTrait;
    use ListOperations\ListOperationsTrait;
    use ListPrices\ListPricesTrait;
    use ListTagsForDomain\ListTagsForDomainTrait;
    use PushDomain\PushDomainTrait;
    use RegisterDomain\RegisterDomainTrait;
    use RejectDomainTransferFromAnotherAwsAccount\RejectDomainTransferFromAnotherAwsAccountTrait;
    use RenewDomain\RenewDomainTrait;
    use ResendContactReachabilityEmail\ResendContactReachabilityEmailTrait;
    use ResendOperationAuthorization\ResendOperationAuthorizationTrait;
    use RetrieveDomainAuthCode\RetrieveDomainAuthCodeTrait;
    use TransferDomain\TransferDomainTrait;
    use TransferDomainToAnotherAwsAccount\TransferDomainToAnotherAwsAccountTrait;
    use UpdateDomainContact\UpdateDomainContactTrait;
    use UpdateDomainContactPrivacy\UpdateDomainContactPrivacyTrait;
    use UpdateDomainNameservers\UpdateDomainNameserversTrait;
    use UpdateTagsForDomain\UpdateTagsForDomainTrait;
    use ViewBilling\ViewBillingTrait;
}
