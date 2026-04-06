<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel;

class PartnerCentralChannelClient extends \Aws\PartnerCentralChannel\PartnerCentralChannelClient
{
    use AcceptChannelHandshake\AcceptChannelHandshakeTrait;
    use CancelChannelHandshake\CancelChannelHandshakeTrait;
    use CreateChannelHandshake\CreateChannelHandshakeTrait;
    use CreateProgramManagementAccount\CreateProgramManagementAccountTrait;
    use CreateRelationship\CreateRelationshipTrait;
    use DeleteProgramManagementAccount\DeleteProgramManagementAccountTrait;
    use DeleteRelationship\DeleteRelationshipTrait;
    use GetRelationship\GetRelationshipTrait;
    use ListChannelHandshakes\ListChannelHandshakesTrait;
    use ListProgramManagementAccounts\ListProgramManagementAccountsTrait;
    use ListRelationships\ListRelationshipsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use RejectChannelHandshake\RejectChannelHandshakeTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateProgramManagementAccount\UpdateProgramManagementAccountTrait;
    use UpdateRelationship\UpdateRelationshipTrait;
}
