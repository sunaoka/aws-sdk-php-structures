<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\CreateElasticsearchDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ChangeId
 * @property string|null $Message
 */
class ChangeProgressDetails extends Shape
{
    /**
     * @param array{
     *     ChangeId?: string|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
