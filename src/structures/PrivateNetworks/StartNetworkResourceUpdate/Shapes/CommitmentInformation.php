<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\StartNetworkResourceUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CommitmentConfiguration $commitmentConfiguration
 * @property \Aws\Api\DateTimeResult $expiresOn
 * @property \Aws\Api\DateTimeResult $startAt
 */
class CommitmentInformation extends Shape
{
    /**
     * @param array{
     *     commitmentConfiguration: CommitmentConfiguration,
     *     expiresOn?: \Aws\Api\DateTimeResult,
     *     startAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
