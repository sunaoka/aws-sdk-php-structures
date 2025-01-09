<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeConfigurationRevision;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property int $Revision
 */
class DescribeConfigurationRevisionRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     Revision: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
