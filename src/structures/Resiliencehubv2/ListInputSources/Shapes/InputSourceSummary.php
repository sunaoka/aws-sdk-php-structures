<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListInputSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $inputSourceId
 * @property 'CFN_STACK'|'TAGS'|'EKS'|'TERRAFORM'|'DESIGN_FILE'|'MONITORING'|null $type
 * @property list<ResourceTag>|null $resourceTags
 * @property string|null $cfnStackArn
 * @property string|null $tfStateFileUrl
 * @property EksSource|null $eks
 * @property string|null $designFileS3Url
 * @property \Aws\Api\DateTimeResult|null $createdAt
 */
class InputSourceSummary extends Shape
{
    /**
     * @param array{
     *     inputSourceId: string,
     *     type?: 'CFN_STACK'|'TAGS'|'EKS'|'TERRAFORM'|'DESIGN_FILE'|'MONITORING'|null,
     *     resourceTags?: list<ResourceTag>|null,
     *     cfnStackArn?: string|null,
     *     tfStateFileUrl?: string|null,
     *     eks?: EksSource|null,
     *     designFileS3Url?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
