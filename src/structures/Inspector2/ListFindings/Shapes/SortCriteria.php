<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS_ACCOUNT_ID'|'FINDING_TYPE'|'SEVERITY'|'FIRST_OBSERVED_AT'|'LAST_OBSERVED_AT'|'FINDING_STATUS'|'RESOURCE_TYPE'|'ECR_IMAGE_PUSHED_AT'|'ECR_IMAGE_REPOSITORY_NAME'|'ECR_IMAGE_REGISTRY'|'NETWORK_PROTOCOL'|'COMPONENT_TYPE'|'VULNERABILITY_ID'|'VULNERABILITY_SOURCE'|'INSPECTOR_SCORE'|'VENDOR_SEVERITY'|'EPSS_SCORE' $field
 * @property 'ASC'|'DESC' $sortOrder
 */
class SortCriteria extends Shape
{
    /**
     * @param array{
     *     field: 'AWS_ACCOUNT_ID'|'FINDING_TYPE'|'SEVERITY'|'FIRST_OBSERVED_AT'|'LAST_OBSERVED_AT'|'FINDING_STATUS'|'RESOURCE_TYPE'|'ECR_IMAGE_PUSHED_AT'|'ECR_IMAGE_REPOSITORY_NAME'|'ECR_IMAGE_REGISTRY'|'NETWORK_PROTOCOL'|'COMPONENT_TYPE'|'VULNERABILITY_ID'|'VULNERABILITY_SOURCE'|'INSPECTOR_SCORE'|'VENDOR_SEVERITY'|'EPSS_SCORE',
     *     sortOrder: 'ASC'|'DESC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
