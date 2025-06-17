<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceDetails|null $details
 * @property string $id
 * @property string|null $partition
 * @property string|null $region
 * @property array<string, string>|null $tags
 * @property 'AWS_EC2_INSTANCE'|'AWS_ECR_CONTAINER_IMAGE'|'AWS_ECR_REPOSITORY'|'AWS_LAMBDA_FUNCTION'|'CODE_REPOSITORY' $type
 */
class ResourceShape extends Shape
{
    /**
     * @param array{
     *     details?: ResourceDetails|null,
     *     id: string,
     *     partition?: string|null,
     *     region?: string|null,
     *     tags?: array<string, string>|null,
     *     type: 'AWS_EC2_INSTANCE'|'AWS_ECR_CONTAINER_IMAGE'|'AWS_ECR_REPOSITORY'|'AWS_LAMBDA_FUNCTION'|'CODE_REPOSITORY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
