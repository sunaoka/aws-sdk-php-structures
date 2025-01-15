<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetFieldLevelEncryptionProfileConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $CallerReference
 * @property string|null $Comment
 * @property EncryptionEntities $EncryptionEntities
 */
class FieldLevelEncryptionProfileConfig extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     CallerReference: string,
     *     Comment?: string|null,
     *     EncryptionEntities: EncryptionEntities
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
