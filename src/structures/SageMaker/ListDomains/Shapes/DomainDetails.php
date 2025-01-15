<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DomainArn
 * @property string|null $DomainId
 * @property string|null $DomainName
 * @property 'Deleting'|'Failed'|'InService'|'Pending'|'Updating'|'Update_Failed'|'Delete_Failed'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $Url
 */
class DomainDetails extends Shape
{
    /**
     * @param array{
     *     DomainArn?: string|null,
     *     DomainId?: string|null,
     *     DomainName?: string|null,
     *     Status?: 'Deleting'|'Failed'|'InService'|'Pending'|'Updating'|'Update_Failed'|'Delete_Failed'|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     Url?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
