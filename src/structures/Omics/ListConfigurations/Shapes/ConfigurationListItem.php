<?php

namespace Sunaoka\Aws\Structures\Omics\ListConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $description
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'DELETED'|'FAILED'|null $status
 * @property \Aws\Api\DateTimeResult|null $creationTime
 */
class ConfigurationListItem extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     status?: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'DELETED'|'FAILED'|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
