<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetFieldLevelEncryptionProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property FieldLevelEncryptionProfileConfig $FieldLevelEncryptionProfileConfig
 */
class FieldLevelEncryptionProfile extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     FieldLevelEncryptionProfileConfig: FieldLevelEncryptionProfileConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
