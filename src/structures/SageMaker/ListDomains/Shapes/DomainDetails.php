<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainArn
 * @property string $DomainId
 * @property string $DomainName
 * @property 'Deleting'|'Failed'|'InService'|'Pending'|'Updating'|'Update_Failed'|'Delete_Failed' $Status
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $Url
 */
class DomainDetails extends Shape
{
    /**
     * @param array{
     *     DomainArn?: string,
     *     DomainId?: string,
     *     DomainName?: string,
     *     Status?: 'Deleting'|'Failed'|'InService'|'Pending'|'Updating'|'Update_Failed'|'Delete_Failed',
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     Url?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
