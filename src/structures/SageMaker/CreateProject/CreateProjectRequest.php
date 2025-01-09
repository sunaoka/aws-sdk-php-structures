<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectName
 * @property string $ProjectDescription
 * @property Shapes\ServiceCatalogProvisioningDetails $ServiceCatalogProvisioningDetails
 * @property list<Shapes\Tag> $Tags
 */
class CreateProjectRequest extends Request
{
    /**
     * @param array{
     *     ProjectName: string,
     *     ProjectDescription?: string,
     *     ServiceCatalogProvisioningDetails: Shapes\ServiceCatalogProvisioningDetails,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
