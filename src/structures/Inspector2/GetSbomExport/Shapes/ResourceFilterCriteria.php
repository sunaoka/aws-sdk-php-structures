<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetSbomExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ResourceStringFilter> $accountId
 * @property list<ResourceMapFilter> $ec2InstanceTags
 * @property list<ResourceStringFilter> $ecrImageTags
 * @property list<ResourceStringFilter> $ecrRepositoryName
 * @property list<ResourceStringFilter> $lambdaFunctionName
 * @property list<ResourceMapFilter> $lambdaFunctionTags
 * @property list<ResourceStringFilter> $resourceId
 * @property list<ResourceStringFilter> $resourceType
 */
class ResourceFilterCriteria extends Shape
{
    /**
     * @param array{
     *     accountId?: list<ResourceStringFilter>,
     *     ec2InstanceTags?: list<ResourceMapFilter>,
     *     ecrImageTags?: list<ResourceStringFilter>,
     *     ecrRepositoryName?: list<ResourceStringFilter>,
     *     lambdaFunctionName?: list<ResourceStringFilter>,
     *     lambdaFunctionTags?: list<ResourceMapFilter>,
     *     resourceId?: list<ResourceStringFilter>,
     *     resourceType?: list<ResourceStringFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
