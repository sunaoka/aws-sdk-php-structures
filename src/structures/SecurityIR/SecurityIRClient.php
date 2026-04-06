<?php

namespace Sunaoka\Aws\Structures\SecurityIR;

class SecurityIRClient extends \Aws\SecurityIR\SecurityIRClient
{
    use BatchGetMemberAccountDetails\BatchGetMemberAccountDetailsTrait;
    use CancelMembership\CancelMembershipTrait;
    use CloseCase\CloseCaseTrait;
    use CreateCase\CreateCaseTrait;
    use CreateCaseComment\CreateCaseCommentTrait;
    use CreateMembership\CreateMembershipTrait;
    use GetCase\GetCaseTrait;
    use GetCaseAttachmentDownloadUrl\GetCaseAttachmentDownloadUrlTrait;
    use GetCaseAttachmentUploadUrl\GetCaseAttachmentUploadUrlTrait;
    use GetMembership\GetMembershipTrait;
    use ListCaseEdits\ListCaseEditsTrait;
    use ListCases\ListCasesTrait;
    use ListComments\ListCommentsTrait;
    use ListInvestigations\ListInvestigationsTrait;
    use ListMemberships\ListMembershipsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use SendFeedback\SendFeedbackTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateCase\UpdateCaseTrait;
    use UpdateCaseComment\UpdateCaseCommentTrait;
    use UpdateCaseStatus\UpdateCaseStatusTrait;
    use UpdateMembership\UpdateMembershipTrait;
    use UpdateResolverType\UpdateResolverTypeTrait;
}
