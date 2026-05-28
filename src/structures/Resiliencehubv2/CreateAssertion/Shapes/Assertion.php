<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreateAssertion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serviceArn
 * @property string $assertionId
 * @property string $text
 * @property 'AI_GENERATED'|'USER' $source
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class Assertion extends Shape
{
    /**
     * @param array{
     *     serviceArn: string,
     *     assertionId: string,
     *     text: string,
     *     source: 'AI_GENERATED'|'USER',
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
