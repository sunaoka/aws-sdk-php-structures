<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\ListAccessProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $profileId
 * @property string $arn
 * @property string $name
 * @property string|null $description
 * @property 'SERVICE_MANAGED'|'CUSTOMER_MANAGED'|null $profileType
 */
class AccessProfileSummary extends Shape
{
    /**
     * @param array{
     *     profileId: string,
     *     arn: string,
     *     name: string,
     *     description?: string|null,
     *     profileType?: 'SERVICE_MANAGED'|'CUSTOMER_MANAGED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
