<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Audit
 * @property bool $General
 */
class AwsAmazonMqBrokerLogsPendingDetails extends Shape
{
    /**
     * @param array{
     *     Audit?: bool,
     *     General?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
