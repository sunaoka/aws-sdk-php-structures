<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListFieldLevelEncryptionConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string|null $Comment
 * @property QueryArgProfileConfig|null $QueryArgProfileConfig
 * @property ContentTypeProfileConfig|null $ContentTypeProfileConfig
 */
class FieldLevelEncryptionSummary extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     Comment?: string|null,
     *     QueryArgProfileConfig?: QueryArgProfileConfig|null,
     *     ContentTypeProfileConfig?: ContentTypeProfileConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
