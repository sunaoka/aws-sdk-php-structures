<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog;

class MarketplaceCatalogClient extends \Aws\MarketplaceCatalog\MarketplaceCatalogClient
{
    use BatchDescribeEntities\BatchDescribeEntitiesTrait;
    use CancelChangeSet\CancelChangeSetTrait;
    use DeleteResourcePolicy\DeleteResourcePolicyTrait;
    use DescribeChangeSet\DescribeChangeSetTrait;
    use DescribeEntity\DescribeEntityTrait;
    use GetResourcePolicy\GetResourcePolicyTrait;
    use ListChangeSets\ListChangeSetsTrait;
    use ListEntities\ListEntitiesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutResourcePolicy\PutResourcePolicyTrait;
    use StartChangeSet\StartChangeSetTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
