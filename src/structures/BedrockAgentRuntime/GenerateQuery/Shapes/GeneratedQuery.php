<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GenerateQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sql
 * @property 'REDSHIFT_SQL'|null $type
 */
class GeneratedQuery extends Shape
{
    /**
     * @param array{
     *     sql?: string|null,
     *     type?: 'REDSHIFT_SQL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
