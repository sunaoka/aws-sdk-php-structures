<?php

namespace Sunaoka\Aws\Structures\RAM\ListPrincipals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $resourceShareArn
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 * @property bool $external
 */
class Principal extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     resourceShareArn?: string,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     external?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
