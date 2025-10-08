<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListCodeInterpreters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $codeInterpreterId
 * @property string $codeInterpreterArn
 * @property string|null $name
 * @property string|null $description
 * @property 'CREATING'|'CREATE_FAILED'|'READY'|'DELETING'|'DELETE_FAILED'|'DELETED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 */
class CodeInterpreterSummary extends Shape
{
    /**
     * @param array{
     *     codeInterpreterId: string,
     *     codeInterpreterArn: string,
     *     name?: string|null,
     *     description?: string|null,
     *     status: 'CREATING'|'CREATE_FAILED'|'READY'|'DELETING'|'DELETE_FAILED'|'DELETED',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
