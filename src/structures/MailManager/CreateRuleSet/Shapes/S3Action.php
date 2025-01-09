<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONTINUE'|'DROP' $ActionFailurePolicy
 * @property string $RoleArn
 * @property string $S3Bucket
 * @property string $S3Prefix
 * @property string $S3SseKmsKeyId
 */
class S3Action extends Shape
{
    /**
     * @param array{
     *     ActionFailurePolicy?: 'CONTINUE'|'DROP',
     *     RoleArn: string,
     *     S3Bucket: string,
     *     S3Prefix?: string,
     *     S3SseKmsKeyId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
