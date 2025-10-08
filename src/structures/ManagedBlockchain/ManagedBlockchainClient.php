<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain;

class ManagedBlockchainClient extends \Aws\ManagedBlockchain\ManagedBlockchainClient
{
    use CreateAccessor\CreateAccessorTrait;
    use CreateMember\CreateMemberTrait;
    use CreateNetwork\CreateNetworkTrait;
    use CreateNode\CreateNodeTrait;
    use CreateProposal\CreateProposalTrait;
    use DeleteAccessor\DeleteAccessorTrait;
    use DeleteMember\DeleteMemberTrait;
    use DeleteNode\DeleteNodeTrait;
    use GetAccessor\GetAccessorTrait;
    use GetMember\GetMemberTrait;
    use GetNetwork\GetNetworkTrait;
    use GetNode\GetNodeTrait;
    use GetProposal\GetProposalTrait;
    use ListAccessors\ListAccessorsTrait;
    use ListInvitations\ListInvitationsTrait;
    use ListMembers\ListMembersTrait;
    use ListNetworks\ListNetworksTrait;
    use ListNodes\ListNodesTrait;
    use ListProposalVotes\ListProposalVotesTrait;
    use ListProposals\ListProposalsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use RejectInvitation\RejectInvitationTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateMember\UpdateMemberTrait;
    use UpdateNode\UpdateNodeTrait;
    use VoteOnProposal\VoteOnProposalTrait;
}
