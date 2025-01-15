<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateConnectionAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectionString
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateConnectionAliasRequest extends Request
{
    /**
     * @param array{
     *     ConnectionString: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
