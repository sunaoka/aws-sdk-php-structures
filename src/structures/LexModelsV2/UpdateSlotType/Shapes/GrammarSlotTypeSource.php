<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateSlotType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3BucketName
 * @property string $s3ObjectKey
 * @property string $kmsKeyArn
 */
class GrammarSlotTypeSource extends Shape
{
    /**
     * @param array{
     *     s3BucketName: string,
     *     s3ObjectKey: string,
     *     kmsKeyArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
