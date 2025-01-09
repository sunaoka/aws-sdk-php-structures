<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectName
 * @property string $ProjectDescription
 * @property Shapes\ServiceCatalogProvisioningUpdateDetails $ServiceCatalogProvisioningUpdateDetails
 * @property list<Shapes\Tag> $Tags
 */
class UpdateProjectRequest extends Request
{
    /**
     * @param array{
     *     ProjectName: string,
     *     ProjectDescription?: string,
     *     ServiceCatalogProvisioningUpdateDetails?: Shapes\ServiceCatalogProvisioningUpdateDetails,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
