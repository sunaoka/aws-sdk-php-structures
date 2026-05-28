<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreateInputSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ResourceTag>|null $resourceTags
 * @property string|null $cfnStackArn
 * @property string|null $tfStateFileUrl
 * @property EksSource|null $eks
 * @property string|null $designFileS3Url
 */
class ResourceConfiguration extends Shape
{
    /**
     * @param array{
     *     resourceTags?: list<ResourceTag>|null,
     *     cfnStackArn?: string|null,
     *     tfStateFileUrl?: string|null,
     *     eks?: EksSource|null,
     *     designFileS3Url?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
