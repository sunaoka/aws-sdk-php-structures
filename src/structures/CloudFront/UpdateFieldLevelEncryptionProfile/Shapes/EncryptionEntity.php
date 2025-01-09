<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateFieldLevelEncryptionProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PublicKeyId
 * @property string $ProviderId
 * @property FieldPatterns $FieldPatterns
 */
class EncryptionEntity extends Shape
{
    /**
     * @param array{
     *     PublicKeyId: string,
     *     ProviderId: string,
     *     FieldPatterns: FieldPatterns
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
