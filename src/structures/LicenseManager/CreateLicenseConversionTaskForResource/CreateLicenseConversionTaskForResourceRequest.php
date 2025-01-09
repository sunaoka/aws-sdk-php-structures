<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CreateLicenseConversionTaskForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property Shapes\LicenseConversionContext $SourceLicenseContext
 * @property Shapes\LicenseConversionContext $DestinationLicenseContext
 */
class CreateLicenseConversionTaskForResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     SourceLicenseContext: Shapes\LicenseConversionContext,
     *     DestinationLicenseContext: Shapes\LicenseConversionContext
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
