<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceDetails $details
 * @property string $id
 * @property string $partition
 * @property string $region
 * @property array<string, string> $tags
 * @property 'AWS_EC2_INSTANCE'|'AWS_ECR_CONTAINER_IMAGE'|'AWS_ECR_REPOSITORY'|'AWS_LAMBDA_FUNCTION' $type
 */
class Resource extends Shape
{
    /**
     * @param array{
     *     details?: ResourceDetails,
     *     id: string,
     *     partition?: string,
     *     region?: string,
     *     tags?: array<string, string>,
     *     type: 'AWS_EC2_INSTANCE'|'AWS_ECR_CONTAINER_IMAGE'|'AWS_ECR_REPOSITORY'|'AWS_LAMBDA_FUNCTION'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
