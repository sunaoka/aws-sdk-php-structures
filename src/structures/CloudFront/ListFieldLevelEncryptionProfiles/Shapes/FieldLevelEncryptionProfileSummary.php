<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListFieldLevelEncryptionProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $Name
 * @property EncryptionEntities $EncryptionEntities
 * @property string $Comment
 */
class FieldLevelEncryptionProfileSummary extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     Name: string,
     *     EncryptionEntities: EncryptionEntities,
     *     Comment?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
