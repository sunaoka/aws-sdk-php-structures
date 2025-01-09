<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DeletePackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REQUIRED'|'OPTIONAL'|'NONE' $LicenseRequirement
 * @property string $LicenseFilepath
 * @property 'REQUIRED'|'OPTIONAL'|'NONE' $ConfigurationRequirement
 * @property bool $RequiresRestartForConfigurationUpdate
 */
class PackageConfiguration extends Shape
{
    /**
     * @param array{
     *     LicenseRequirement: 'REQUIRED'|'OPTIONAL'|'NONE',
     *     LicenseFilepath?: string,
     *     ConfigurationRequirement: 'REQUIRED'|'OPTIONAL'|'NONE',
     *     RequiresRestartForConfigurationUpdate?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
