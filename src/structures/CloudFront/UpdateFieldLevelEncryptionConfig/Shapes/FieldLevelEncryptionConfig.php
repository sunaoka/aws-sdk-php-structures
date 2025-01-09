<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateFieldLevelEncryptionConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CallerReference
 * @property string $Comment
 * @property QueryArgProfileConfig $QueryArgProfileConfig
 * @property ContentTypeProfileConfig $ContentTypeProfileConfig
 */
class FieldLevelEncryptionConfig extends Shape
{
    /**
     * @param array{
     *     CallerReference: string,
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
