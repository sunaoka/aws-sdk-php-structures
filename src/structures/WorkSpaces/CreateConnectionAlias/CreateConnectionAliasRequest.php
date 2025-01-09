<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateConnectionAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectionString
 * @property list<Shapes\Tag> $Tags
 */
class CreateConnectionAliasRequest extends Request
{
    /**
     * @param array{
     *     ConnectionString: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
