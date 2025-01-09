<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutIndexPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $logGroupIdentifier
 * @property int<0, max> $lastUpdateTime
 * @property string $policyDocument
 * @property string $policyName
 * @property 'ACCOUNT'|'LOG_GROUP' $source
 */
class IndexPolicy extends Shape
{
    /**
     * @param array{
     *     logGroupIdentifier?: string,
     *     lastUpdateTime?: int<0, max>,
     *     policyDocument?: string,
     *     policyName?: string,
     *     source?: 'ACCOUNT'|'LOG_GROUP'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
