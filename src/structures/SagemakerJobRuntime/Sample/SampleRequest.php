<?php

namespace Sunaoka\Aws\Structures\SagemakerJobRuntime\Sample;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobArn
 * @property string $TrajectoryId
 * @property string|resource|\Psr\Http\Message\StreamInterface $Body
 */
class SampleRequest extends Request
{
    /**
     * @param array{
     *     JobArn: string,
     *     TrajectoryId: string,
     *     Body: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
