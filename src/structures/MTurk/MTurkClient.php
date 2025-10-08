<?php

namespace Sunaoka\Aws\Structures\MTurk;

class MTurkClient extends \Aws\MTurk\MTurkClient
{
    use AcceptQualificationRequest\AcceptQualificationRequestTrait;
    use ApproveAssignment\ApproveAssignmentTrait;
    use AssociateQualificationWithWorker\AssociateQualificationWithWorkerTrait;
    use CreateAdditionalAssignmentsForHIT\CreateAdditionalAssignmentsForHITTrait;
    use CreateHIT\CreateHITTrait;
    use CreateHITType\CreateHITTypeTrait;
    use CreateHITWithHITType\CreateHITWithHITTypeTrait;
    use CreateQualificationType\CreateQualificationTypeTrait;
    use CreateWorkerBlock\CreateWorkerBlockTrait;
    use DeleteHIT\DeleteHITTrait;
    use DeleteQualificationType\DeleteQualificationTypeTrait;
    use DeleteWorkerBlock\DeleteWorkerBlockTrait;
    use DisassociateQualificationFromWorker\DisassociateQualificationFromWorkerTrait;
    use GetAccountBalance\GetAccountBalanceTrait;
    use GetAssignment\GetAssignmentTrait;
    use GetFileUploadURL\GetFileUploadURLTrait;
    use GetHIT\GetHITTrait;
    use GetQualificationScore\GetQualificationScoreTrait;
    use GetQualificationType\GetQualificationTypeTrait;
    use ListAssignmentsForHIT\ListAssignmentsForHITTrait;
    use ListBonusPayments\ListBonusPaymentsTrait;
    use ListHITs\ListHITsTrait;
    use ListHITsForQualificationType\ListHITsForQualificationTypeTrait;
    use ListQualificationRequests\ListQualificationRequestsTrait;
    use ListQualificationTypes\ListQualificationTypesTrait;
    use ListReviewPolicyResultsForHIT\ListReviewPolicyResultsForHITTrait;
    use ListReviewableHITs\ListReviewableHITsTrait;
    use ListWorkerBlocks\ListWorkerBlocksTrait;
    use ListWorkersWithQualificationType\ListWorkersWithQualificationTypeTrait;
    use NotifyWorkers\NotifyWorkersTrait;
    use RejectAssignment\RejectAssignmentTrait;
    use RejectQualificationRequest\RejectQualificationRequestTrait;
    use SendBonus\SendBonusTrait;
    use SendTestEventNotification\SendTestEventNotificationTrait;
    use UpdateExpirationForHIT\UpdateExpirationForHITTrait;
    use UpdateHITReviewStatus\UpdateHITReviewStatusTrait;
    use UpdateHITTypeOfHIT\UpdateHITTypeOfHITTrait;
    use UpdateNotificationSettings\UpdateNotificationSettingsTrait;
    use UpdateQualificationType\UpdateQualificationTypeTrait;
}
