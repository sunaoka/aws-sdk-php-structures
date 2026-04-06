<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreatePackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REQUIRED'|'OPTIONAL'|'NONE' $LicenseRequirement
 * @property string|null $LicenseFilepath
 * @property 'REQUIRED'|'OPTIONAL'|'NONE' $ConfigurationRequirement
 * @property bool|null $RequiresRestartForConfigurationUpdate
 */
class PackageConfiguration extends Shape
{
    /**
     * @param array{
     *     LicenseRequirement: 'REQUIRED'|'OPTIONAL'|'NONE',
     *     LicenseFilepath?: string|null,
     *     ConfigurationRequirement: 'REQUIRED'|'OPTIONAL'|'NONE',
     *     RequiresRestartForConfigurationUpdate?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
