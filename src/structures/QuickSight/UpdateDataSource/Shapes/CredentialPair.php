<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Username
 * @property string $Password
 * @property list<DataSourceParameters>|null $AlternateDataSourceParameters
 */
class CredentialPair extends Shape
{
    /**
     * @param array{
     *     Username: string,
     *     Password: string,
     *     AlternateDataSourceParameters?: list<DataSourceParameters>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
