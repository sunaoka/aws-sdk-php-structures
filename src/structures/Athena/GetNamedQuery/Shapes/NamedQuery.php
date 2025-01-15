<?php

namespace Sunaoka\Aws\Structures\Athena\GetNamedQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $Description
 * @property string $Database
 * @property string $QueryString
 * @property string|null $NamedQueryId
 * @property string|null $WorkGroup
 */
class NamedQuery extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     Database: string,
     *     QueryString: string,
     *     NamedQueryId?: string|null,
     *     WorkGroup?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
