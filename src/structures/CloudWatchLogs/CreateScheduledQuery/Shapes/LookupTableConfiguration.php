<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\CreateScheduledQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $tableName
 * @property string $roleArn
 * @property string|null $description
 * @property string|null $kmsKeyId
 * @property array<string, string>|null $tags
 */
class LookupTableConfiguration extends Shape
{
    /**
     * @param array{
     *     tableName: string,
     *     roleArn: string,
     *     description?: string|null,
     *     kmsKeyId?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
