<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetFieldLevelEncryption\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property FieldLevelEncryptionConfig $FieldLevelEncryptionConfig
 */
class FieldLevelEncryption extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     FieldLevelEncryptionConfig: FieldLevelEncryptionConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
