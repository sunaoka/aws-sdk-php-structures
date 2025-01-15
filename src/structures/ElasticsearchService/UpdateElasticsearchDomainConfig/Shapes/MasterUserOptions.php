<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\UpdateElasticsearchDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MasterUserARN
 * @property string|null $MasterUserName
 * @property string|null $MasterUserPassword
 */
class MasterUserOptions extends Shape
{
    /**
     * @param array{
     *     MasterUserARN?: string|null,
     *     MasterUserName?: string|null,
     *     MasterUserPassword?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
