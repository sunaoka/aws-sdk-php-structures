<?php

namespace Sunaoka\Aws\Structures\Route53\ChangeCidrCollection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property int<1, max>|null $CollectionVersion
 * @property list<Shapes\CidrCollectionChange> $Changes
 */
class ChangeCidrCollectionRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     CollectionVersion?: int<1, max>|null,
     *     Changes: list<Shapes\CidrCollectionChange>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
