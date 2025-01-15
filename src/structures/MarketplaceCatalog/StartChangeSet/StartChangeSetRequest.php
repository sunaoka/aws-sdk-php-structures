<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\StartChangeSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property list<Shapes\Change> $ChangeSet
 * @property string|null $ChangeSetName
 * @property string|null $ClientRequestToken
 * @property list<Shapes\Tag>|null $ChangeSetTags
 * @property 'VALIDATE'|'APPLY'|null $Intent
 */
class StartChangeSetRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     ChangeSet: list<Shapes\Change>,
     *     ChangeSetName?: string|null,
     *     ClientRequestToken?: string|null,
     *     ChangeSetTags?: list<Shapes\Tag>|null,
     *     Intent?: 'VALIDATE'|'APPLY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
