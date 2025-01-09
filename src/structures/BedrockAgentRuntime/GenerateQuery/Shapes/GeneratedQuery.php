<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GenerateQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sql
 * @property 'REDSHIFT_SQL' $type
 */
class GeneratedQuery extends Shape
{
    /**
     * @param array{
     *     sql?: string,
     *     type?: 'REDSHIFT_SQL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
