<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetFieldLevelEncryptionConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CallerReference
 * @property string|null $Comment
 * @property QueryArgProfileConfig|null $QueryArgProfileConfig
 * @property ContentTypeProfileConfig|null $ContentTypeProfileConfig
 */
class FieldLevelEncryptionConfig extends Shape
{
    /**
     * @param array{
     *     CallerReference: string,
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
