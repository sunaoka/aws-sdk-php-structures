<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\StartChangeSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property list<Shapes\Change> $ChangeSet
 * @property string $ChangeSetName
 * @property string $ClientRequestToken
 * @property list<Shapes\Tag> $ChangeSetTags
 * @property 'VALIDATE'|'APPLY' $Intent
 */
class StartChangeSetRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     ChangeSet: list<Shapes\Change>,
     *     ChangeSetName?: string,
     *     ClientRequestToken?: string,
     *     ChangeSetTags?: list<Shapes\Tag>,
     *     Intent?: 'VALIDATE'|'APPLY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
