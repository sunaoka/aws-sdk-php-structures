<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeSoftwareAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SoftwareName
 * @property 'STAGED_FOR_INSTALLATION'|'PENDING_INSTALLATION'|'INSTALLED'|'STAGED_FOR_UNINSTALLATION'|'PENDING_UNINSTALLATION'|'FAILED_TO_INSTALL'|'FAILED_TO_UNINSTALL'|null $Status
 * @property list<ErrorDetails>|null $DeploymentError
 */
class SoftwareAssociations extends Shape
{
    /**
     * @param array{
     *     SoftwareName?: string|null,
     *     Status?: 'STAGED_FOR_INSTALLATION'|'PENDING_INSTALLATION'|'INSTALLED'|'STAGED_FOR_UNINSTALLATION'|'PENDING_UNINSTALLATION'|'FAILED_TO_INSTALL'|'FAILED_TO_UNINSTALL'|null,
     *     DeploymentError?: list<ErrorDetails>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
