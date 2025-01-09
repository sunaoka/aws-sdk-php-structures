<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateFieldLevelEncryptionProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $CallerReference
 * @property string $Comment
 * @property EncryptionEntities $EncryptionEntities
 */
class FieldLevelEncryptionProfileConfig extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     CallerReference: string,
     *     Comment?: string,
     *     EncryptionEntities: EncryptionEntities
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
