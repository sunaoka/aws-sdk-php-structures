<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutLogEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'InvalidEntity'|'InvalidTypeValue'|'InvalidKeyAttributes'|'InvalidAttributes'|'EntitySizeTooLarge'|'UnsupportedLogGroupType'|'MissingRequiredFields' $errorType
 */
class RejectedEntityInfo extends Shape
{
    /**
     * @param array{errorType: 'InvalidEntity'|'InvalidTypeValue'|'InvalidKeyAttributes'|'InvalidAttributes'|'EntitySizeTooLarge'|'UnsupportedLogGroupType'|'MissingRequiredFields'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
