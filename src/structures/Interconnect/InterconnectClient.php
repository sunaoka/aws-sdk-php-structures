<?php

namespace Sunaoka\Aws\Structures\Interconnect;

class InterconnectClient extends \Aws\Interconnect\InterconnectClient
{
    use AcceptConnectionProposal\AcceptConnectionProposalTrait;
    use CreateConnection\CreateConnectionTrait;
    use DeleteConnection\DeleteConnectionTrait;
    use DescribeConnectionProposal\DescribeConnectionProposalTrait;
    use GetConnection\GetConnectionTrait;
    use GetEnvironment\GetEnvironmentTrait;
    use ListAttachPoints\ListAttachPointsTrait;
    use ListConnections\ListConnectionsTrait;
    use ListEnvironments\ListEnvironmentsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateConnection\UpdateConnectionTrait;
}
