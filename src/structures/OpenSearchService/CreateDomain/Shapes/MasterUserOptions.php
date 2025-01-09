<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MasterUserARN
 * @property string $MasterUserName
 * @property string $MasterUserPassword
 */
class MasterUserOptions extends Shape
{
    /**
     * @param array{
     *     MasterUserARN?: string,
     *     MasterUserName?: string,
     *     MasterUserPassword?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
