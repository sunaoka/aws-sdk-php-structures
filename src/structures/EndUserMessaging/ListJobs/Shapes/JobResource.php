<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REGISTRATION'|'BRAND_PROFILE' $resourceType
 * @property string $resourceId
 * @property string $resourceArn
 */
class JobResource extends Shape
{
    /**
     * @param array{
     *     resourceType: 'REGISTRATION'|'BRAND_PROFILE',
     *     resourceId: string,
     *     resourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
