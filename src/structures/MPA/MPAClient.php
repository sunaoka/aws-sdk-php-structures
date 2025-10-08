<?php

namespace Sunaoka\Aws\Structures\MPA;

class MPAClient extends \Aws\MPA\MPAClient
{
    use CancelSession\CancelSessionTrait;
    use CreateApprovalTeam\CreateApprovalTeamTrait;
    use CreateIdentitySource\CreateIdentitySourceTrait;
    use DeleteIdentitySource\DeleteIdentitySourceTrait;
    use DeleteInactiveApprovalTeamVersion\DeleteInactiveApprovalTeamVersionTrait;
    use GetApprovalTeam\GetApprovalTeamTrait;
    use GetIdentitySource\GetIdentitySourceTrait;
    use GetPolicyVersion\GetPolicyVersionTrait;
    use GetResourcePolicy\GetResourcePolicyTrait;
    use GetSession\GetSessionTrait;
    use ListApprovalTeams\ListApprovalTeamsTrait;
    use ListIdentitySources\ListIdentitySourcesTrait;
    use ListPolicies\ListPoliciesTrait;
    use ListPolicyVersions\ListPolicyVersionsTrait;
    use ListResourcePolicies\ListResourcePoliciesTrait;
    use ListSessions\ListSessionsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use StartActiveApprovalTeamDeletion\StartActiveApprovalTeamDeletionTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateApprovalTeam\UpdateApprovalTeamTrait;
}
