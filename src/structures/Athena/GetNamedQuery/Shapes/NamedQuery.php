<?php

namespace Sunaoka\Aws\Structures\Athena\GetNamedQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property string $Database
 * @property string $QueryString
 * @property string $NamedQueryId
 * @property string $WorkGroup
 */
class NamedQuery extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     Database: string,
     *     QueryString: string,
     *     NamedQueryId?: string,
     *     WorkGroup?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
