<?php

namespace Sunaoka\Aws\Structures\Route53\CreateHostedZone\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property 'PENDING'|'INSYNC' $Status
 * @property \Aws\Api\DateTimeResult $SubmittedAt
 * @property string $Comment
 */
class ChangeInfo extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Status: 'PENDING'|'INSYNC',
     *     SubmittedAt: \Aws\Api\DateTimeResult,
     *     Comment?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
