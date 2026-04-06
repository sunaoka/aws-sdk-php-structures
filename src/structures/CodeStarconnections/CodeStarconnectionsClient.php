<?php

namespace Sunaoka\Aws\Structures\CodeStarconnections;

class CodeStarconnectionsClient extends \Aws\CodeStarconnections\CodeStarconnectionsClient
{
    use CreateConnection\CreateConnectionTrait;
    use CreateHost\CreateHostTrait;
    use DeleteConnection\DeleteConnectionTrait;
    use DeleteHost\DeleteHostTrait;
    use GetConnection\GetConnectionTrait;
    use GetHost\GetHostTrait;
    use ListConnections\ListConnectionsTrait;
    use ListHosts\ListHostsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateHost\UpdateHostTrait;
}
