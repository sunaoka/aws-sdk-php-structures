<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeRemediationExceptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConfigRuleName
 * @property string $ResourceType
 * @property string $ResourceId
 * @property string|null $Message
 * @property \Aws\Api\DateTimeResult|null $ExpirationTime
 */
class RemediationException extends Shape
{
    /**
     * @param array{
     *     ConfigRuleName: string,
     *     ResourceType: string,
     *     ResourceId: string,
     *     Message?: string|null,
     *     ExpirationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
