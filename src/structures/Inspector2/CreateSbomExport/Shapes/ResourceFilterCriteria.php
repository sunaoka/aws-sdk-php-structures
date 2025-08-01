<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateSbomExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ResourceStringFilter>|null $accountId
 * @property list<ResourceStringFilter>|null $resourceId
 * @property list<ResourceStringFilter>|null $resourceType
 * @property list<ResourceStringFilter>|null $ecrRepositoryName
 * @property list<ResourceStringFilter>|null $lambdaFunctionName
 * @property list<ResourceStringFilter>|null $ecrImageTags
 * @property list<ResourceMapFilter>|null $ec2InstanceTags
 * @property list<ResourceMapFilter>|null $lambdaFunctionTags
 */
class ResourceFilterCriteria extends Shape
{
    /**
     * @param array{
     *     accountId?: list<ResourceStringFilter>|null,
     *     resourceId?: list<ResourceStringFilter>|null,
     *     resourceType?: list<ResourceStringFilter>|null,
     *     ecrRepositoryName?: list<ResourceStringFilter>|null,
     *     lambdaFunctionName?: list<ResourceStringFilter>|null,
     *     ecrImageTags?: list<ResourceStringFilter>|null,
     *     ec2InstanceTags?: list<ResourceMapFilter>|null,
     *     lambdaFunctionTags?: list<ResourceMapFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
