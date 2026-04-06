<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\ConfigureAccessPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CommitmentConfiguration $commitmentConfiguration
 * @property \Aws\Api\DateTimeResult|null $expiresOn
 * @property \Aws\Api\DateTimeResult|null $startAt
 */
class CommitmentInformation extends Shape
{
    /**
     * @param array{
     *     commitmentConfiguration: CommitmentConfiguration,
     *     expiresOn?: \Aws\Api\DateTimeResult|null,
     *     startAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
