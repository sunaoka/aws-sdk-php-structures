<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount;

class PartnerCentralAccountClient extends \Aws\PartnerCentralAccount\PartnerCentralAccountClient
{
    use AcceptConnectionInvitation\AcceptConnectionInvitationTrait;
    use AssociateAwsTrainingCertificationEmailDomain\AssociateAwsTrainingCertificationEmailDomainTrait;
    use CancelConnection\CancelConnectionTrait;
    use CancelConnectionInvitation\CancelConnectionInvitationTrait;
    use CancelProfileUpdateTask\CancelProfileUpdateTaskTrait;
    use CreateConnectionInvitation\CreateConnectionInvitationTrait;
    use CreatePartner\CreatePartnerTrait;
    use DisassociateAwsTrainingCertificationEmailDomain\DisassociateAwsTrainingCertificationEmailDomainTrait;
    use GetAllianceLeadContact\GetAllianceLeadContactTrait;
    use GetConnection\GetConnectionTrait;
    use GetConnectionInvitation\GetConnectionInvitationTrait;
    use GetConnectionPreferences\GetConnectionPreferencesTrait;
    use GetPartner\GetPartnerTrait;
    use GetProfileUpdateTask\GetProfileUpdateTaskTrait;
    use GetProfileVisibility\GetProfileVisibilityTrait;
    use GetVerification\GetVerificationTrait;
    use ListConnectionInvitations\ListConnectionInvitationsTrait;
    use ListConnections\ListConnectionsTrait;
    use ListPartners\ListPartnersTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutAllianceLeadContact\PutAllianceLeadContactTrait;
    use PutProfileVisibility\PutProfileVisibilityTrait;
    use RejectConnectionInvitation\RejectConnectionInvitationTrait;
    use SendEmailVerificationCode\SendEmailVerificationCodeTrait;
    use StartProfileUpdateTask\StartProfileUpdateTaskTrait;
    use StartVerification\StartVerificationTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateConnectionPreferences\UpdateConnectionPreferencesTrait;
}
