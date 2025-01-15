<?php

namespace Sunaoka\Aws\Structures\MailManager\GetRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONTINUE'|'DROP'|null $ActionFailurePolicy
 * @property string $RoleArn
 * @property string $S3Bucket
 * @property string|null $S3Prefix
 * @property string|null $S3SseKmsKeyId
 */
class S3Action extends Shape
{
    /**
     * @param array{
     *     ActionFailurePolicy?: 'CONTINUE'|'DROP'|null,
     *     RoleArn: string,
     *     S3Bucket: string,
     *     S3Prefix?: string|null,
     *     S3SseKmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
