<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListFieldLevelEncryptionConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $Comment
 * @property QueryArgProfileConfig $QueryArgProfileConfig
 * @property ContentTypeProfileConfig $ContentTypeProfileConfig
 */
class FieldLevelEncryptionSummary extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     Comment?: string,
     *     QueryArgProfileConfig?: QueryArgProfileConfig,
     *     ContentTypeProfileConfig?: ContentTypeProfileConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
