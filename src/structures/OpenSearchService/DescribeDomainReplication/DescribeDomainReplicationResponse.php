<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainReplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DomainArn
 * @property 'PRIMARY'|'SECONDARY'|null $Role
 * @property list<Shapes\ReplicationPeer>|null $Peers
 */
class DescribeDomainReplicationResponse extends Response
{
}
