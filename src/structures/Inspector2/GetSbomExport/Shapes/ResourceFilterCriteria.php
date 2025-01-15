<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetSbomExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ResourceStringFilter>|null $accountId
 * @property list<ResourceMapFilter>|null $ec2InstanceTags
 * @property list<ResourceStringFilter>|null $ecrImageTags
 * @property list<ResourceStringFilter>|null $ecrRepositoryName
 * @property list<ResourceStringFilter>|null $lambdaFunctionName
 * @property list<ResourceMapFilter>|null $lambdaFunctionTags
 * @property list<ResourceStringFilter>|null $resourceId
 * @property list<ResourceStringFilter>|null $resourceType
 */
class ResourceFilterCriteria extends Shape
{
    /**
     * @param array{
     *     accountId?: list<ResourceStringFilter>|null,
     *     ec2InstanceTags?: list<ResourceMapFilter>|null,
     *     ecrImageTags?: list<ResourceStringFilter>|null,
     *     ecrRepositoryName?: list<ResourceStringFilter>|null,
     *     lambdaFunctionName?: list<ResourceStringFilter>|null,
     *     lambdaFunctionTags?: list<ResourceMapFilter>|null,
     *     resourceId?: list<ResourceStringFilter>|null,
     *     resourceType?: list<ResourceStringFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
