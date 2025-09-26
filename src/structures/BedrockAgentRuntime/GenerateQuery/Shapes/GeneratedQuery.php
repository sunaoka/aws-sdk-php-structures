<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GenerateQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REDSHIFT_SQL'|null $type
 * @property string|null $sql
 */
class GeneratedQuery extends Shape
{
    /**
     * @param array{
     *     type?: 'REDSHIFT_SQL'|null,
     *     sql?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
