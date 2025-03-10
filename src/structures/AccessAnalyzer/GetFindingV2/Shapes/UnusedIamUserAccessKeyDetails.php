<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetFindingV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accessKeyId
 * @property \Aws\Api\DateTimeResult|null $lastAccessed
 */
class UnusedIamUserAccessKeyDetails extends Shape
{
    /**
     * @param array{
     *     accessKeyId: string,
     *     lastAccessed?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
