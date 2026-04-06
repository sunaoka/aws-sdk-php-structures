<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutIndexPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $logGroupIdentifier
 * @property int<0, max>|null $lastUpdateTime
 * @property string|null $policyDocument
 * @property string|null $policyName
 * @property 'ACCOUNT'|'LOG_GROUP'|null $source
 */
class IndexPolicy extends Shape
{
    /**
     * @param array{
     *     logGroupIdentifier?: string|null,
     *     lastUpdateTime?: int<0, max>|null,
     *     policyDocument?: string|null,
     *     policyName?: string|null,
     *     source?: 'ACCOUNT'|'LOG_GROUP'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
