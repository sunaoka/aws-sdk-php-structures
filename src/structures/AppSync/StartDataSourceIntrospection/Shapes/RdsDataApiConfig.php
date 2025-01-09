<?php

namespace Sunaoka\Aws\Structures\AppSync\StartDataSourceIntrospection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceArn
 * @property string $secretArn
 * @property string $databaseName
 */
class RdsDataApiConfig extends Shape
{
    /**
     * @param array{
     *     resourceArn: string,
     *     secretArn: string,
     *     databaseName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
