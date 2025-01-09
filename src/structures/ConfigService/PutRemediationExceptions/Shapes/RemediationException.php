<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutRemediationExceptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConfigRuleName
 * @property string $ResourceType
 * @property string $ResourceId
 * @property string $Message
 * @property \Aws\Api\DateTimeResult $ExpirationTime
 */
class RemediationException extends Shape
{
    /**
     * @param array{
     *     ConfigRuleName: string,
     *     ResourceType: string,
     *     ResourceId: string,
     *     Message?: string,
     *     ExpirationTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
